
<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	
	
	
	</head>
	<body>
		<h2>Login here to continue...</h2>
	
	
		<form action="login_check.php" method="post">
			<link rel="stylesheet" href="registerstyle.css">
			<p>
				
		<div><label>Username</label><input type="text" name="username" required="required" class="txt"/></div><br>
		<div><label>Password</label><input type="password" name="password" required="required"/ class="txt"></div><br>
				
		<div>		<input type="submit" value="login" class="btn"/></div>
			
			
			</p>
		</form>
	</body>
</html>


