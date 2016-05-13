<?php 
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "greenool";
$dbport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);

?>