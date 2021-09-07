<?php
//This script will handle login

session_start();

$_SESSION = array();
session_destroy();

// check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: admin.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


    if (empty($err)) {
        $sql = "SELECT id, username, password FROM admint WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $unhased_password);
                if (mysqli_stmt_fetch($stmt)) {
                    $hashed = password_hash($unhased_password, PASSWORD_DEFAULT);
                    if (password_verify($password, $hashed)) {
                        // this means the password is corrct. Allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to welcome page
                        header("location: admin.php");
                    } else {
                        $err = "Please enter username + password";;
                    }
                }
            }
        }
    }
    echo '<script type="text/javascript">';
    echo 'alert("Enter Valid Credentials");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
