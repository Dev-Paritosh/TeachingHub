<?php

session_start();
$_SESSION = array();
session_destroy();
echo '<script>alert("Log Out Successfully")</script>';
header("location: Home.php");
