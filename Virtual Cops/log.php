<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<input type="email" name="email" placeholder="email"><br>
		<input type="password" name="pass" placeholder="pass"><br>
		<input type="submit" value="submit">
		<?php 
		if (!empty($_POST['email'])&&!empty($_POST['pass'])) {
			$conn = mysqli_connect("localhost", "root", "", "vcop");
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$res = mysqli_query($conn,"SELECT * FROM `reg` WHERE email = '$email' AND pass = '$pass';");
			if (!empty($row=mysqli_fetch_assoc($res))) {
					/*while ($row=mysqli_fetch_assoc($res)) {*/
						echo 'Authentication Success';
					/*}*/
				}
				else{
					echo 'Authentication Failed';
				}
				/*if ($res) {
					echo 'success';
				}
				else {
					echo 'error';
				}*/
		}
 ?>
	</form>
</body>
</html>