

<?php 
include('db.php');
session_start();
{
    $user=mysql_real_escape_string($_POST['uname']);
    $pass=mysql_real_escape_string($_POST['password']);
    $fetch=mysql_query("SELECT username FROM `registration` WHERE username='$user' and password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
    session_register("sessionusername");
    $_SESSION['login_username']=$user;
    header("Location:book.php"); 
    }
    else
    {
       header('Location:login.php');
    }

}
?>

