<?php
session_start();
include("check.php");
require("customercart.php");

//temp:
//var_dump($_POST);

$host = "localhost";
$username = "username";
$password = "password";
$db = "tsarbucks";

$connection = mysqli_connect("localhost", "root", "root", "tsarbucks" );

if (!$connection) {
     die("Connection failed: " . mysqli_connect_error());
}
// Save new orders
$sql = 'INSERT INTO orders (order_id, user_id, product_id, quantity, completed, created_at, updated_at) VALUES ('.$row['order_id'].', '.$row['user_id'].', '.$row['quantity'].', '.$row['completed'].', '.$row['created_at'].', '.$row['updated_at'].')';

mysqli_query($connection, $sql);
header("Location: customercart.php");
unset($_SESSION['cart']);

 ?>
 Thanks for your purchase. Click <a href="customermenu.php">here</a> to return to menu or <a href="logout.php">logout</a>.
