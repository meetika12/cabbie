

<?php 
include('db.php');
session_start();

$user=$_POST['username'];
$pass=$_POST['password'];
$fetch= mysqli_query($db, "SELECT username FROM `registration` WHERE username='$user' and password='$pass'");
$row = mysqli_fetch_array($fetch);

if(!empty($row['username']))
{
    $_SESSION['username']= $row['username'];
    header("Location:book.php"); 
}
else
{
    header('Location:login.php');
}

?>

