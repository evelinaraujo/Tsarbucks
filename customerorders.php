<?php
session_start();
include("check.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
</head>

<body>
    <!--Navbar-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <h1 class="navbar-brand mb-0">Tsarbucks</h1>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        	<li class="nav-item">
                                <a class="nav-link" href="welcomecustomer.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="customermenu.php">Menu</a>
                            </li>
                                <a class="nav-link active" href="customerorders.php">My Orders</a>
                            </li> 
                            </ul>
                            </div>

                            <div class = "collapse navbar-collapse justify-content-end" id="navbarNav"> 
                            <ul class="navbar-nav">                            
                            <span class="navbar-text ">Welcome, <?php echo $login_user; ?>! </span>
                            <li class="nav-item">
                                <a class="nav-link" href="customercart.php">My Cart</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li> 
                        </ul>

 						</div>
          
                </nav>
                <!-- End of Navbar-->
            </div>
        </div>
        <!--End of Row-->
    </div>
    <!--End of Container-->

   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h1>My orders</h1>
                <br>
            </div>
        </div>
    </div>

<div class="container">
<div class ="row">
<div class = "col-md-12">
</div>
<table class="table">
<form method="post" action ="" id ="updatedata">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Size (oz)</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

<?php
$host = "localhost";
$username = "username";
$password = "password";
$db = "tsarbucks";
$connection = mysqli_connect("localhost", "root", "root", "tsarbucks" );

if (!$connection) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = ("SELECT DISTINCT orders.order_id,orders.product_id, orders.quantity, products.display_name, products.size, products.price FROM orders INNER JOIN products ON orders.product_id=products.product_id WHERE orders.completed = 0 "); 

$results= mysqli_query($connection, $sql);

  if (mysqli_query($results) == 0) {
     while($row = mysqli_fetch_array($results)) {
//$id = $row['product_id']; 

 echo "<h2> Order: " .$row['order_id']. "</h2>" ;       
 echo "<tr>";
 echo "<td>" .$row['display_name']."</td>";
 echo "<td>" .$row['size']."</td>";
 echo "<td>".$row['quantity']."</td>";
 echo "<td>$".$row['price']."</td>";
 echo "<td> pending </td>";
  echo "</tr>";

 
  }
}

 else {
     echo "0 results";
}
?>


</tbody>
</form>
</table>

<table class="table">
<form method="post" action ="" id ="updatedata">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Size (oz)</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = ("SELECT DISTINCT orders.order_id, orders.product_id, orders.quantity, products.display_name, products.size, products.price FROM orders INNER JOIN products ON orders.product_id=products.product_id WHERE orders.completed > 0"); 

$results= mysqli_query($connection, $sql);
//$order = ("SELECT DISTINCT order_id FROM orders");
//$orderresult = mysql_query($connection, $order);

  if (mysqli_query($results) == 0) {
     while($row = mysqli_fetch_array($results)) {
//$id = $row['product_id']; 
 echo "<h2> Order: " .$row['order_id']. "</h2>" ;       
 echo "<tr>";
 echo "<td>" .$row['display_name']."</td>";
 echo "<td>" .$row['size']."</td>";
 echo "<td>".$row['quantity']."</td>";
 echo "<td>$".$row['price']."</td>";
 echo "<td> complete </td>";
  }
}

 else {
     echo "0 results";
}

?>

</div>
</div>
</body>
</html>



