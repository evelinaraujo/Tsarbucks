<?php
   session_start();
   include(check.php);
if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
    $items = $_SESSION['cart'];
    $cartitems = explode(",", $items);
    $items .= "," . $_GET['product_id'];
    $_SESSION['cart'] = $items;
    header('location: customermenu.php?status=success');
}else{
    $items = $_GET['product_id'];
    $_SESSION['cart'] = $items;
    header('location: customermenu.php?status=success');
}
?>
