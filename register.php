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
		<form action="action.php" method="post">
			<p>
			<div><label>Name</label> <input type="text" name="name" class="txt"/></div><br>
			<div><label>Username</label><input type="text" name="username" class="txt"/></div><br>
			<div><label>Email</label> <input type="text" name="email" class="txt"/></div><br>
			<div><label>Contact</label>  <input type="text" name="contact" class="txt"/> </div><br>
			<div><label>Address</label> <input type="text" name="address" class="txt"/> </div><br>
			<div><label>Password</label><input type="password" name="password" class="txt"/> </div><br>
			<div><label>Gender</label> <input type="text" name="gender" class="txt"/></div><br>
			<div>	<input type="submit" class="btn" /> </<div>
			</p>
		</form>
	</body>
</html>


