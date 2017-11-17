<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];

$session_sql = mysqli_query($connection,"SELECT username FROM users WHERE username='$user_check' ");

$rower= mysqli_fetch_array($session_sql, MYSQLI_ASSOC);

$login_user=$rower['username'];

if(!isset($user_check))
{
header("Location: index.php");

}
?>