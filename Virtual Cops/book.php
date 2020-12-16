<?php 
$name = $_POST['name'];
$pname = $_POST['pname'];
$date = $_POST['date'];
$time = $_POST['time'];
$des = $_POST['des'];

if(!empty($name)&&!empty($pname)&&!empty($date)&&!empty($time)&&!empty($des))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="verna";

	$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error())
	{
		die("CONNECTION ERROR");
	}
	else
	{
		$INSERT="INSERT INTO book (`name`, `pname`, `date`, `time`, `des`) VALUES ('$name','$pname','$date','$time','$des')";
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