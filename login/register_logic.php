<?php
require_once "config.php";

$username = $password = $confirm_password = $name = $email = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                    echo '<script type="text/javascript">';
                    echo 'alert("This username is already taken");';
                    echo 'window.location.href = "index.php";';
                    echo '</script>';
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong";
            }
        }
        // echo "<script>alert('Please enter valid detail')</script>";
    }

    // in case of any data insertion bug activate the below line
    // mysqli_stmt_close($stmt);


    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
        echo '<script type="text/javascript">';
        echo 'alert("Password cannot be less than 5 characters");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    } else {
        $password = trim($_POST['password']);
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
        echo '<script type="text/javascript">';
        echo 'alert("Password should match");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO users (username, password, name, email) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_name, $param_email);

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_name = $name;
            $param_email = $email;

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                // $success = "Registered Successfully";
                // echo "<script type=\"text/javascript\">alert('Registered Successfully')</script>";
                echo '<script type="text/javascript">';
                echo 'alert("Registered Successfully");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            } else {

                echo '<script type="text/javascript">';
                echo 'alert("Something went worng try again !");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
    echo '<script type="text/javascript">';
    echo 'alert("fill all detail");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
