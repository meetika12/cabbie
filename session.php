<?php
include('db.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT username FROM `registration` WHERE username='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['uname'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>