<?php 
$conn = mysqli_connect("localhost", "root", "", "wt");
if ($conn->connect_error) {
	echo 'Error';
}
else{
	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$insert = "insert into proj2 (user,email,pass) values ('$user','$email','$pass')";
	$res = mysqli_query($conn, $insert);
	if ($res) {
		echo 'Records entered successfully';
	}
	else {
		echo 'Records Insertion error';
	}
}
 ?>
