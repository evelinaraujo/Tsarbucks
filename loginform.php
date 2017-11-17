<?php
	include('login.php'); // Include Login Script
/*
	if (isset($_SESSION['username'])) 
	{
		header('Location: home.php');
	}	
	
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
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
                            
                            </ul>
                            </div>

                            <div class = "collapse navbar-collapse justify-content-end" id="navbarNav"> 
                            <ul class="navbar-nav">                            
                            <li class="nav-item active">
                                <a class="nav-link" href="loginform.php">Login</a>
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
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
</head>
<body>

   <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-12">
                <h1>Login</h1>
                <br>
                <form class="form-horizontal" action="" method="post" >
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id=username placeholder="Enter username" name="username">
                        </div>
                    </div>
                    <!--End of email Div-->
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                    </div>
                    <!-- Error Message -->
					<span><?php echo $loginerror; 
					?> <br></span>
                    <input type="submit" value="Login" name="submit">
		
                </form>
                <!--End of Form -->
                </div>
            </div>
        <!--End of Row Div -->
    </div><!--End of Container-->
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
</body>
</html>