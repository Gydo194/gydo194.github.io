<?php

session_start();
$_SESSION["login"] = false;
$_SESSION["userconf"] = array();


$cfg = file_get_contents("config.json");
$config = json_decode($cfg,true);
if($config == null) {die("CONFIG ERROR");}


if(isset($_GET["user"]) && isset($_GET["pass"])) {
    $_SESSION["login"] = true;
    $_SESSION["username"] = $_GET["user"];
    echo "setting _SESSION['username'] = ".$_GET["user"];
}

if($_SESSION["login"] == true) {
    echo "\nlogin successful";
    echo "<meta http-equiv=\"Location\" content=\"/\" />";
    echo "<script>window.location = '/';</script>";
    exit();
                               
                               
                               
} else {echo "login failed";}



?>