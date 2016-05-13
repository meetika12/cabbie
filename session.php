<?php
include('db.php');

session_start();

$check=$_SESSION['username'];

$session=mysqli_query($db,"SELECT username FROM `registration` WHERE username='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $row['username'];

if(!isset($login_session))
{
    header("Location:index.php");
}

?>