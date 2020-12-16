<?php 
$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$locality = $_POST['locality'];
$subject = $_POST['subject'];
$des = $_POST['des'];
$date = $_POST['date'];
$time = $_POST['time'];


if(!empty($name)&&!empty($phoneno)&&!empty($locality)&&!empty($subject)&&!empty($des)&&!empty($date)&&!empty($time))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="nonemergency";

	$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error())
	{
		die("CONNECTION ERROR");
	}
	else
	{
		$INSERT="INSERT INTO cases (`name`, `phoneno`, `locality`, `subject`,`des`, `date`,`time`) VALUES ('$name','$phoneno','$locality','$subject','$des','$date','$time')";
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