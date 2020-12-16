<?php 
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];


if(!empty($name)&&!empty($username)&&!empty($password)&&!empty($gender))
{
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
		$INSERT="INSERT INTO user (`name`, `username`, `password`, `gender`) VALUES ('$name','$username','$password','$gender')";
		$res=mysqli_query($conn,$INSERT);
		if ($res) {
			echo "success";
		}
		else{
			echo "not";
		}
	}
}
else{		
echo "enter all the values";
}
 ?>