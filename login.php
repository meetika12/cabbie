
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
			<p>
				
				Username<input type="text" name="username" required="required"/><br>
				Password<input type="password" name="password" required="required"/><br>
				
				<input type="submit" value="login"/>
			
			
			</p>
		</form>
	</body>
</html>


