<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	table{
		width: 70%;
		border: 1px solid black;
		margin-left: 170px;
		box-shadow: 10px 10px 15px grey;
		background: white;
	}
	td{
		text-align: center;
		border: 1px solid transparent;
		width: 50%;
	}
	body{
		background: #95b1d6;
	}
	tr:nth-child(even) {background-color: #d3dfef;}
	#divider{
		border: 1px solid black;
	}
</style>
<body>
<?php 
	$conn=mysqli_connect("localhost", "root", "", "vcop");
	if (mysql_error()) {
		echo 'error';
	}
	else {
		$res = mysqli_query($conn,"SELECT * FROM `comp` WHERE sub = 'Hurt'");
		echo '';
		while ($row=mysqli_fetch_assoc($res)) {
			echo '<table><tr>';
			echo '<td rowspan=10>';?><img src="<?php echo $row["images"]?>" height="200" width="200"> <?php echo '</td></tr>';
			echo '<tr><td>'; echo $row["name"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["gender"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["doo"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["dob"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["poo"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["address"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["des"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["num"]; echo '</td></tr>';
			echo '<tr><td>'; echo $row["email"]; echo '</td></tr></table>'; 
		}
	}
 ?>
</body>
</html>