<?php 
session_start();
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
if(isset($_GET['remove'])){
	$deleteitem = $_GET['remove'];
	unset($cartitems[$deleteitem]);
	$itemids = implode(",", $cartitems);
	$_SESSION['cart'] = $itemids;
}
header('Location: customercart.php');