

<?php 
include('db.php');
session_start();

$user=$_POST['uname'];
$pass=$_POST['password'];
$fetch= mysqli_query($db, "SELECT username FROM `registration` WHERE username='$user' and password='$pass'");
$row = mysqli_fetch_array($fetch);
echo $row['username'];
foreach($row as $ro) {
    echo $ro, '<br>';
}
if(!empty($row['username']))
{
    // session_register("sessionusername");
    $_SESSION['username']= $row['username'];
    header("Location:book.php"); 
//   echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
}
else
{
  header('Location:login.php');
// echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
}

?>

