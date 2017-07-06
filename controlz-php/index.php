<?php

if(isset($_GET["debug"])) { define("DEBUG",true);} else {define("DEBUG",false);}

session_start();


if(isset($_SESSION["login"]) || $_SESSION["login"] == true) {

   
   if(isset($_SESSION["username"])) {
       echo "Welcome, ".$_SESSION["username"];
       echo "<br /><a href='logout.php'>Log off</a>";
       if(DEBUG) var_dump($_SESSION["userconf"]);
       http_response_code(303);
       header("Location","main.php");
       echo "<meta http-equiv=\"Location\" content=\"main.php\" />";
       echo "<script>window.location = 'main.php';</script>";
       exit();
       
   } 
    else {
        die("internal error: username session variable not set.");
        
}
    
    
}
else {
    http_response_code(303);
    header("Location","login.php");
    echo "Redirect failed. \nPlease log in.";
    echo "<meta http-equiv=\"Location\" content=\"login.php\" />";
    echo "<script>window.location = 'login.php';</script>";
    exit();
}




?>