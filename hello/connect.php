<?php
  $host = "localhost";
  $user = "root";
  $pw = "meowmeow";
  $db = "bootshop";

  $con = new mysqli($host, $user, $pw, $db);
  session_start();

  if ($con->connect_error) {
    echo "Error can't connect";
  }
 ?>
