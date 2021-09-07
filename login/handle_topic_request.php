<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: Home.php");
}
include("config.php");
if (isset($_GET['topic'])) {

  $viatopic = $_GET['topic'];
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/wlcmstyle.css">

  <script src="https://kit.fontawesome.com/ce39fda112.js" crossorigin="anonymous"></script>
  <title>Teaching Hub</title>
</head>

<body>




  <!--  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- topic -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Topic
          </a>
          <form action="" method="post">
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <?php
              $fetchtopic = mysqli_query($conn, "SELECT DISTINCT topic FROM videos ");
              if ($fetchtopic) {
                while ($row = mysqli_fetch_assoc($fetchtopic)) {
                  $topic = $row['topic'];
                  echo "<a class='dropdown-item' href='handle_topic_request.php?topic=$topic '>$topic</a>";
                }
              }
              ?>


            </div>
          </form>

        </li>
        <!-- subtopic -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sub-Topic
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php
            $fetchsubtopic = mysqli_query($conn, "SELECT DISTINCT sub_topic FROM videos ");
            if ($fetchsubtopic) {
              while ($row = mysqli_fetch_assoc($fetchsubtopic)) {
                $sub_topic = $row['sub_topic'];


                echo "<a class='dropdown-item' href='handle_sub_topic_request.php?sub_topic=$sub_topic '>$sub_topic</a>";
              }
            }
            ?>
          </div>
        </li>
      </ul>


      <a href="logout.php"><button class="btn btn btn-lg btn-primary my-2 my-sm-0" type="submit">LogOut</button></a>

    </div>
  </nav>




  <!-- video part -->
  <div class="container-fluid wlcm mx-auto ">
    <h3>Welcome <?php echo $_SESSION['username'] ?>! You can now use this website</h3>


  </div>



  <section id="vedioPlay">
    <div class="vedio ">
      <?php


      // fetch videos
      $fetchVideos = mysqli_query($conn, "SELECT videos.location, videos.title,videos.id ,videos.discription FROM videos WHERE topic='$viatopic' ");
      if ($fetchVideos) {
        while ($row = mysqli_fetch_assoc($fetchVideos)) {
          $location = $row['location'];
          $title = $row['title'];
          $video_id = $row['id'];
          $discription = $row['discription'];

          echo "<div>";
          echo "<div class='row' >";
          echo "<div class='col-lg-4 col-md-6 video'>";
          echo "<video src='" . $location . "' controls width='80%' height='100%' >";

          echo "</div >";

          $likeVideos = mysqli_query($conn, "SELECT COUNT(*) as likes FROM videos_liked where videos_liked.video= $video_id");
          while ($row = mysqli_fetch_assoc($likeVideos)) {
            $no_of_likes = $row['likes'];
          }

          echo "<div class='col-lg-8 col-md-6'>";
          echo '<div class="box">';
          echo "<h3 class='title'>$title</h3>";
          echo "<p class='discription'>$discription</p>";
          echo "<a href='like.php?type=vedio&id=$video_id'><i class='far fa-thumbs-up like-button' ></i> $no_of_likes</a>";
          // echo "$no_of_likes";
          echo "</div >";
          echo "</div >";
          echo "</div >";
          echo "</div >";
        }
      } else {
        echo "nothing found";
      }


      ?>
    </div>
  </section>

  <footer id="footer">
    <p>© Copyright 2021 Teaching Hub</p>

  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>