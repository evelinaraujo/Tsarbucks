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
                            <li class="nav-item active">
                                <a class="nav-link" href="customermenu.php">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="customerorders.php">My Orders</a>
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
<div class ="row">
<div class = "col-md-12">
</div>
<h1>Menu</h1>
<table class="table">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Size (oz)</th>
      <th>Add to cart</th>
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

$sql = "SELECT * FROM products"; 
$results= mysqli_query($connection, $sql);

  if (mysqli_num_rows($results) > 0) {
    
     while($row = mysqli_fetch_array($results)) {
//$id = $row['product_id']; 
  echo "<tr>";
 echo "<td>" .$row['display_name']."</td>";
 echo "<td>$" .$row['price']."</td>";
 echo "<td>".$row['size']."</td>";
 ?>
 <td><a href="addtocart.php?product_id=<?php echo $row['product_id']; ?> " class = "btn btn-primary" role ="button">Add to Cart</a> </td>
<?php
echo "</tr>";
 }
}
 else {
     echo "0 results";
}

 mysql_close($conn);
 ?>
</tbody> 
</table>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
</body>
</html>	

