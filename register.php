<?php
session_start();

if (!isset($_SESSION['count'])) 
{
  $_SESSION['count'] = 0;
} 
else 
{
  $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
		<h1>User Registration Form</h1>
		<link rel="stylesheet" href="registerstyle.css">
		
	
		
		<form action="action.php" method="post" name="Register" class="validate">

			<p>
			<div><label>Name</label> <input type="text" name="name" class="txt" required/></div><br>
			<div><label>Username</label><input type="text" name="username" class="txt" required/></div><br>
			<div><label>Email</label> <input type="email" name="email" class="txt" required/></div><br>
			<div><label>Contact</label>  <input type="text" name="contact" class="txt" required/> </div><br>
			<div><label>Address</label> <input type="text" name="address" class="txt" required/> </div><br>
			<div><label>Password</label><input type="password" name="password" class="txt" required/> </div><br>
			<div><label>Gender</label> <input type="text" name="gender" class="txt" required/></div><br>
			<div>	<input type="submit" class="btn" /> </<div>
			</p>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
	
			<script type ="text/javascript" src="formvalidate.js"> </script>
	</body>
</html>


