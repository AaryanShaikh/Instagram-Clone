<?php 
$conn = mysqli_connect("localhost", "root", "", "vcop");
if (mysql_error()) {
	echo 'error';
}
else {
	$fileName = $_FILES['file']['name'];
	$name = $_POST['name'];
	$images = "want/".$fileName;
	$insert = "INSERT INTO `miss` (name, images) VALUES ('$name','$images');";
	$res = mysqli_query($conn, $insert);
	if ($res) {
		echo 'success';
	}
	else {
		echo 'error';
	}
}
 ?>