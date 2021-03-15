<?php
/* You should enable error reporting for mysqli before attempting to make a connection */
$host = "localhost";
$user = "root";
$password = "";
$db = "clinic";
$mysqli = new mysqli($host,$user,$password,$db);
/* Set the desired charset after establishing a connection */
if(!$mysqli){
    die("connection error message: ".$mysqli->error);
}
$mysqli->set_charset('utf8mb4');
?>