<?php
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$loginerror = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$loginerror = "Enter both username and password.";
		}else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			// $connection = mysqli_connect("localhost", "root", "root");

			//Check username and password from database
			$data = mysqli_query($connection, "SELECT * FROM users WHERE password='$password' AND username='$username'");
			
 $numRow = mysqli_num_rows($data);
 if($numRow == 1){
 	while($row = mysqli_fetch_assoc($data))
 	{
 		if($row['user_id'] == '1') {
$_SESSION['username']=$username; 			
header("Location: welcomecustomer.php"); // Redirecting to other page	
 exit();
 	}
 	else {
$_SESSION['username']=$username; 			 		
header("Location: welcomebarista.php"); // Redirecting to other page			
exit();
 	}	
 }
 
 }
			else
			{
				$loginerror = "Incorrect username or password.";
			
			}
	 mysqli_close($connection);
		}
	}

?>