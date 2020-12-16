<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="uname" placeholder="Username" required><br>
		<input type="email" name="email" placeholder="Email" required><br>
		<input type="password" name="pass" placeholder="Password" required><br>
		<input type="submit" value="submit">
		<?php 
		if (!empty($_POST['uname'])&&!empty($_POST['email'])&&!empty($_POST['pass'])) {
			$conn = mysqli_connect("localhost", "root", "", "vcop");
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$insert = "INSERT INTO `reg`(`uname`, `email`, `pass`) VALUES ('$uname','$email','$pass')";
			$res = mysqli_query($conn, $insert);
			if ($res) {
				echo 'Success';
			}
			else {
				echo 'Error';
			}
		}
 ?>
	</form>
</body>
</html>