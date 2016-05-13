<?php
session_start();

$link = mysqli_connect('localhost', 'root', '','greenool');
if (!$link) 
{
    die('Could not connect: ' . mysqli_error());
}

$name=$_POST['name'];
$uname=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$query = "INSERT INTO registration VALUES ('$name','$uname', '$email','$password','$contact','$address','$gender')";

mysqli_query($link, $query) or die(mysqli_error($link));

//echo password_hash("$password", PASSWORD_DEFAULT)."\n";


mysqli_close($link);


// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('rajdev.meetika@gmail.com', 'My Subject', $message);
//if (session_start();
if (isset($_SESSION['count']))
{


function redirect($url) { 
	ob_start(); 
	header('Location: '.$url);
	 ob_end_flush(); 
	 die(); }
redirect("/greenooling/login.php");
}
else
{
	echo "Register first";
}

?>



