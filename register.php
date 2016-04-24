<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html>
<head>



</head>


<body>


<form action="action.php" method="post">
<P>
	Name <input type="text" name="name"/><br>
	Username<input type="text" name="uname"/><br>
	Email <input type="text" name="email"/><br>
	Contact <input type="text" name="contact"/><br>
	Address<input type="text" name="address"/><br>
	Password<input type="password" name="password"/><br>
	Gender<input type="text" name="gender"/><br>

	 <input type="submit" />


</P>
</form>
</body>
</html>


