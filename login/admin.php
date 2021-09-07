<?php

// session_destroy();
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: Home.php");
}
include("config.php");

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/admin_welcom.css">

  <script src="https://kit.fontawesome.com/ce39fda112.js" crossorigin="anonymous"></script>
  <title>Teaching Hub</title>

  <?php
  // include("config.php");
  // if ($_SERVER['REQUEST_METHOD'] == "POST"){
  //   if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
  //   {
  //       $err = "Please enter username + password";
  //   }
  //   else{
  //       $username = trim($_POST['username']);
  //       $password = trim($_POST['password']);
  //   }
  $err = "";
  if (isset($_POST['but_upload'])) {
    $maxsize = 52428800000; // 50000MB

    $name = $_FILES['file']['name'];
    $target_dir = "videos/";
    $target_file = $target_dir . $_FILES["file"]["name"];
    $title = trim($_POST['title_name']);
    $discription = trim($_POST['discription']);
    $topic = trim($_POST['topic_name']);
    $sub_topic = trim($_POST['sub_topic_name']);
    // Select file type
    $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

    // Check extension
    if (in_array($videoFileType, $extensions_arr)) {

      // Check file size $ 
      if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
        $err = "File too large. File must be less than 5MB.";
        echo '<script>alert("File too large. File must be less than 5MB.")</script>';
      } else {
        // Upload
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
          // Insert record
          $query = "INSERT INTO videos(name,location,title,topic,sub_topic,discription) VALUES('" . $name . "','" . $target_file . "','" . $title . "','" . $topic . "','" . $sub_topic . "','" . $discription . "')";

          mysqli_query($conn, $query);
          echo '<script>alert("Uploaded Successfully")</script>';
        }
      }
    } else {
      echo "<script>alert('Invalid file extension.')</script>";
    }
  }

  if ($err) {
    echo "<script>alert('$err')</script>";
  }
  ?>
</head>

<body>



  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="https://img.icons8.com/metro/26/000000/guest-male.png"> Admin Prevelige Access</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent" toggle="collapse" data-target=".navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        </ul>
        <a class="nav-link" href="logout.php"><button class="btn btn-primary">Log Out</button></a>


      </div>
    </div>
  </nav>

  <div class=" box container_form">
    <form method="post" action="" enctype='multipart/form-data'>
      <div class="form-group" id="file">
        <input type='file' name='file' />
      </div>
      <div class="form-group">
        <input type="text" name="title_name" placeholder="TITLE NAME" require autocomplete="off">
      </div>
      <div class="form-group">
        <input type="text" name="topic_name" placeholder="TOPIC NAME" require autocomplete="off">
      </div>
      <div class="form-group">
        <input type="text" name="sub_topic_name" placeholder="SUB TOPIC NAME" require autocomplete="off">
      </div>
      <div class="form-group textarea">
        <textarea name="discription" rows="4" cols="30" placeholder="Write Description Here..." require></textarea>
      </div>


      <div class="upload">
        <input type='submit' value='Upload' name='but_upload'>
      </div>


    </form>



  </div>






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>