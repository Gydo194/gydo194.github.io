<?php

if(isset($_GET["debug"])) { define("debug",true); } else { define("debug", false); }
if(debug){echo "DEBUG MODE ON<br>";}



include_once("config.php");

$mode = "err";
$id = 0;
$res = null;

if(isset($_GET["get"])) {
	$mode = "get";
}
if(isset($_GET["set"])) {
	$mode = "set";
}
if(!$mode == "get" || !$mode == "set") {
	die("ERROR: request mode not specified in request query string\n");
}

if($mode == "err") {
	die("ERROR: please set mode in request query string.");
}


if(isset($_GET["id"])) {
	$id = intval($_GET["id"]);
}
else {
	echo "ERROR: ID not set in request query string\n";
	exit;
}

$db = new mysqli($controlz_db["host"],$controlz_db["user"],$controlz_db["pass"],$controlz_db["db"]);
if(!$db) {
	echo "ERROR CONNECTING: db object is null";
}



if($db->connect_errno) {
	echo "ERRNO:".$db->connect_errno."\n";
	echo "ERROR:".$db->connect_error."\n";
	exit;
}
//set SQL query


// SET
if($mode == "set") {

	$sql = "";
	if(isset($_GET["r"])) {
		$sql_append = "UPDATE rgbled SET R='".$_GET["r"]."' WHERE id=".$id."; ";
		if(debug) echo "APPENDING TO QUERY:".$sql_append."<br>";
		$sql = $sql . $sql_append;
		if(debug) echo "APPENDING TO QUERY SQL IS NOW:".$sql."<br>";
	}
	
	if(isset($_GET["g"])) {
		$sql_append = "UPDATE rgbled SET G='".$_GET["g"]."' WHERE id=".$id."; ";
		if(debug) echo "APPENDING TO QUERY:".$sql_append."<br>";
		$sql .= $sql_append;
		if(debug) echo "APPENDING TO QUERY SQL IS NOW:".$sql."<br>";
	}
	
	if(isset($_GET["b"])) {
		$sql_append = "UPDATE rgbled SET B='".$_GET["b"]."' WHERE id=".$id."; ";
		if(debug) echo "APPENDING TO QUERY:".$sql_append."<br>";
		$sql .= $sql_append;
		if(debug) echo "APPENDING TO QUERY SQL IS NOW:".$sql."<br>";
	}

if(!$db->multi_query($sql)) {
	echo "multi_query() failed: errno:".$db->errno." err:".$db->error."<br>";
}	
	
}





else if($mode == "get") {
$sql = "SELECT R, G, B FROM rgbled WHERE id = ".strval($id).";";

if(!$res = $db->query($sql)) {
	echo "ERROR querying DB";
} else {
	//$rgb = $res->fetch_assoc();
}
}








//GET

//echo "MODE=".$mode;
if($mode == "get") {
try {
if(debug) echo "results for SQL query ".$sql."<br>";
$rgb = $res->fetch_assoc();
/*
echo "Printing stats for rgbled no ".strval($id)."\n";
echo "R:".$rgb['R']."\n";
echo "G:".$rgb['G']."\n";
echo "B:".$rgb['B']."\n";
*/

//echo JSON encoded..
echo json_encode($rgb);

}
catch(Error $e) {
	echo $e->getMessage();
	die("<br>No SQL result to display<br>");
	
}
}

?>