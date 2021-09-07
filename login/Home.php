<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teaching Hub</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css/Home_style.css" />

  <!-- integreted font from google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/ce39fda112.js" crossorigin="anonymous"></script>
</head>

<body>

  <!--  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
    <a class="navbar-brand make-dark" href="#">Teaching Hub</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link make-dark" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link make-dark" href="about.html">Developer</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link make-dark" href="#footer">Socials</a>
        </li>


      </ul>

      <button type="button" class="btn btn-primary show-modal-admin my-2 my-sm-0 btn-p" type="submit">Admin LogIn</button>
      <button class="btn btn-primary mx-3 btn-p" id="dark">Dark</button>
    </div>
  </nav>

  <!-- what is this all about -->
  <section id="intro">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="box">
          <h3>What is this all about?</h3>
          <p>
            This a teaching site where Teacher's Upload lecture video provide study
            material, research paper on several technical topic on regular
            basis.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="box">
          <h3>Register YourSelf</h3>
          <p>
            If you are new to our service Register YourSelf first and get
            started
          </p>
          <div class="button">
            <button type="button" class="btn btn-primary btn-lg show-modal-regi btn-p">
              Register
            </button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="box">
          <h3>Already register?</h3>
          <p>
            If you are already registered then please Login with correct
            credentials
          </p>
          <div class="button">
            <button type="button" class="btn btn-primary btn-lg show-modal btn-p">
              Log In
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- technology used -->
    <div class="row ">
      <div class="col-lg-4 col-md-6">
        <div class="box">
          <h3>Technology Used</h3>
          <p>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Php</li>
            <li>MySql</li>
          </ul>
          </p>

        </div>
      </div>
      <div class="col-lg-8 col-md-6">
        <div class="box-lg">
          <h3>Get Our App</h3>
          <div class="get-app button"><button type="button" class="btn btn-dark btn-lg download-button btn-d "><i class="fab fa-apple"></i>
              Download</button>
            <button type="button" class="btn btn-primary btn-lg download-button btn-p"><i class="fab fa-google-play"></i>
              Download</button>
          </div>

        </div>
      </div>
    </div>
    </div>

  </section>

  <!-- technology used -->
  <section id="tech-used"></section>

  <!-- Footer -->
  <footer id="footer">
    <a href="#" class="icon">
      <i class="social-icon fab fa-3x fa-facebook-f"></i>
    </a>
    <a href="#" class="icon">
      <i class="social-icon fab fa-3x fa-twitter"></i>
    </a>
    <a href="#" class="icon">
      <i class="social-icon fab fa-3x fa-instagram"></i>
    </a>
    <a href="#" class="icon">
      <i class="social-icon fas fa-3x fa-envelope-square"></i>
    </a>




    <p>© Copyright 2021 Teaching Hub</p>

  </footer>

  <!-- Additional Admin Login page -->
  <div class="boxa container hidden modal-admin">
    <form method="POST" action="admin_login_logic.php">
      <div class="login-form">
        <div class="login">
          <h2>Admin LogIn</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Admin Name:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Password:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" />
            </div>
          </div>
        </div>
        <div class="button">
          <button type="submit" class="btn btn-primary btn-lg btn-p">Log In</button>
        </div>
      </div>

    </form>
  </div>

  <!-- Additional Login Page -->

  <div class="boxa container hidden modal">
    <form method="POST" action="login_logic.php">
      <div class="login-form">
        <div class="login">
          <h2>LogIn</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">User Name:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Password:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" />
            </div>
          </div>
        </div>
        <div class="button">
          <button type="submit" class="btn btn-primary btn-lg btn-p">Log In</button>
        </div>
      </div>

    </form>
  </div>

  <!-- Additional Registeration Page -->
  <div class="boxa boxa-regi hidden modal1">
    <form method="POST" action="register_logic.php">
      <div class="login-form">
        <div class="login">
          <h2>Register</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">User Name:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Name:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Email:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Email" name="email" autocomplete="off" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Password:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">Confirm Password:</div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Confirm Password" name="confirm_password" autocomplete="off" />
            </div>
          </div>
        </div>

        <div class="button">
          <button type="submit" class="btn btn-primary btn-lg btn-p">Register</button>
        </div>
      </div>

    </form>
  </div>


  <!-- Additional Download Page -->
  <div class="boxa container hidden modal-dwld">
    <h1>Currently Under Progress... Will Update as soon as arrive</h1>
  </div>


  <div class="overlay hidden"></div>

  <script src="Homejs.js"></script>
  <script src="darkMode.js"></script>

  <!-- logic for collaspe navbar -->

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>