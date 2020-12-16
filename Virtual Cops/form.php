<?php 
$conn = mysqli_connect("localhost", "root", "", "vcop");
if (mysql_error()) {
	echo 'error';
}
else {
	$fileName = $_FILES['file']['name'];
	$name = $_POST['cname'];
	$sub = $_POST['sub'];
	$gender = $_POST['gen'];
	$doo = $_POST['cal'];
	$dob = $_POST['birth'];
	$poo = $_POST['place'];
	$address = $_POST['add'];
	$des = $_POST['des'];
	$num = $_POST['mob'];
	$email = $_POST['email'];
	$images = "want/".$fileName;
	/*echo $fileName;
	echo $name;
	echo $sub;
	echo $gender;
	echo $doo;
	echo $dob;
	echo $poo;
	echo $address;
	echo $des;
	echo $num;
	echo $email;
	echo $images;*/
	$insert = "INSERT INTO `comp` (`name`, `sub`, `gender`, `doo`, `dob`, `poo`, `address`, `des`, `num`, `email`, `images`) VALUES ('$name','$sub','$gender','$doo','$dob','$poo','$address','$des','$num','$email','$images')";
	$res = mysqli_query($conn, $insert);
	if ($res) {
		echo 'success';
	}
	else {
		echo 'error';
	}
}
 ?>