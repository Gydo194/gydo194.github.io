<?php 

session_start();

if(isset($_SESSION["login"])) {
    if($_SESSION["login"] == true) {
    if(isset($_SESSION["username"])) {
        echo "Welcome to main, ".$_SESSION["username"];
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
    else echo "internal error. username session variable not set.";
    }
    else
{
    echo "MAIN: Not logged in.";
    //echo "<meta http-equiv=\"Location\" content=\"../\" />";
    //echo "<script>window.location = '".$_SERVER["HTTP_REFERER"]."';</script>";
    //echo "redirect failed.";
    exit();
}
    
    
    
}






?>