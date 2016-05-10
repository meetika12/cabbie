<?php 
// $link = mysqli_connect('localhost', 'root', 'meetika','');
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "greenool";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

//     // Check connection
//     if ($db->connect_error) {
//         die("Connection failed: " . $db->connect_error);
//     } 
//     echo "Connected successfully (".$db->host_info.")";
// 
?>