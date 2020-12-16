<?php 
$username = $_POST['username'];
$password = $_POST['password'];


	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="register";

	$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error())
	{
		die("CONNECTION ERROR");
	}
	else
	{
		$SELECT="SELECT * FROM user WHERE username = 'arfa1234' AND password = '123456'";
		$res=mysqli_query($conn,$SELECT);
		if ($res->num_rows>0) {
			echo "LOGIN USER SUCESSS";
		}
		else{
			echo "not";
		}
	}


 ?>