<?php
session_start();

require_once "config.php";

if (isset($_GET['type'], $_GET['id'])) {
    $type = $_GET['type'];
    $id = $_GET['id'];

    switch ($type) {
        case 'vedio':

            $sql = "INSERT INTO videos_liked (user, video) SELECT {$_SESSION['id']}, {$id} FROM videos WHERE EXISTS (SELECT id FROM videos WHERE id={$id}) AND NOT EXISTS (SELECT id FROM videos_liked WHERE user ={$_SESSION['id']} AND video={$id}) LIMIT 1";
            mysqli_query($conn, $sql);
    }
}
header('Location: welcome.php');
