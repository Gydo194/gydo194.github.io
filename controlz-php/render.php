<?php
function render_page() {
?>
<html charset="utf-8" id="html">
	<head>
	<!-- favicon stuff -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	<meta name="msapplication-config" content="images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#000000">
    <!-- end favicon -->
	
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/applet-grid-layout.css" />
	<script src="js/api.js" ></script>
	
	
	
	<title>ControlZ</title>
	<!-- MDL sources -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!-- end MDL sources -->
      
      <!-- MDL styles -->
      <style>
      .webapp-layout {
      	background: linear-gradient(135deg, #27E986, #27B0FF);
      }
      	.webapp-layout .mdl-layout__header, .webapp-layout .mdl-layout__drawer-button {
      		color: #3F3F3F;
      	}
      </style>
      <!-- end MDL styles -->
      
      <!-- ControlZ styles -->
      <style>
      .applet-default-old-layout {
      	margin: 0 auto;
      	border-radius: 5px;
      	width: 95vw;
      	height: auto;
      	background-color: white;
      	margin-bottom: 10px;
      	
      }
      .webapp-content {
      	margin: 0 auto;
      	margin-bottom: 0.5vh;
  
      }
      .descriptor {
      	text-align: center;
      }
      
      .mdl-layout-title {
      	color: #3F3F3F;
      	float: center;
      	margin: 0 auto;
      }
   
	.applet-default-grid-layout {
	    /* override the color settings */
		background-color: #E5E5E5;
        border-radius: 5px;
        border: none;
	}
  
  .app-title {
    font-color: #3F3F3F;
    font-size: 2em;
    justify-content: center;
    text-align: center;
    align-items: center;
  }
  
  
  

    
      </style>
      <!-- end ExtenstibleWebApp styles -->
      
      <!-- scripts -->
      
      <script>
        console.log("initscript called");
      </script>
      
      <!-- end scripts-->
      
      
        
        
        
      </head>
      
      <body>
      		<div class="webapp-layout mdl-layout mdl-js-layout">
      			<header id="app-header" class="mdl-layout__header mdl-layout__header--transparent">
      				<div class="mdl-layout__header-row">
      					<span id="app-title-mdl" class="mdl-layout-title app-title "></span>
      					<span class="app-title">ControlZ - <? echo $_SESSION["username"]; ?></span>
      					<div class="mdl-layout-spacer" ></div>
      					
      					<nav class="mdl-navigation">
      						
      					</nav>
      				</div>
      			</header>
      			<div class="mdl-layout__drawer">
      			<span id="app-title-menu" class="mdl-layout-title">ControlZ menu<br><? echo $_SESSION["username"]; ?></span>
      			<nav class="mdl-navigation">
      				<a class="mdl-navigation__link" href="javascript:api.expand();">Expand Applets</a>
      				<a class="mdl-navigation__link" href="javascript:api.resetSize();">Contract Applets</a>
      				<a class="mdl-navigation__link" href="javascript:alert('not implemented');">Config</a>
      				<a class="mdl-navigation__link" href="logout.php">Log Off</a>
      			</nav>
      			
      			</div>
      			
      			<main class="mdl-layout__content">
      			<div class="descriptor">
      			<h2><font color="white"></font></h2>
      			</div>
      			<div class="applet-wrapper" id="app-content-disabled">
      			
      			<div class="applet-container" id="app-content" >
                   
      			</div>



      			</div> <!-- webapp-content -->
      			
      			</main>
      			
      		</div>
      
      </body>
 </html>




<?
    
}


?>