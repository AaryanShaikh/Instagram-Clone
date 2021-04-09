<?php 

if (isset($_POST['confirm'])) {
	$newFileName = "ImageFilter";
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileError = $_FILES['file']['error'];
	$fileSize = $_FILES['file']['size'];
	$fileTempName = $_FILES['file']['tmp_name'];
	$fileExt = explode(".", $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array("png","jpg","jpeg");

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError===0) {
			if ($fileSize < 2000000) {
				$imageFullName = $newFileName.".".uniqid("",true).".".$fileActualExt;
				$fileDestination = "../uploads/".$imageFullName;
				include_once 'dbh.inc.php';
				$sql = "SELECT * from img;";
				$stmt = mysqli_stmt_init($conn);
				if (mysqli_stmt_prepare($stmt,$sql)) {
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					$rowCount = mysqli_num_rows($result);
					$setImageOrder = $rowCount + 1;
					$sql = "INSERT into img (imgName,imgOrder) values (?,?);";
					if (mysqli_stmt_prepare($stmt,$sql)) {
						mysqli_stmt_bind_param($stmt,"ss",$imageFullName,$setImageOrder);
						mysqli_stmt_execute($stmt);
						move_uploaded_file($fileTempName,$fileDestination);
						header("Location: ../index.php?upload=sucess");			
					} else{
						echo 'SQL statement failed(insert)!!';
					}			
				} else{
					echo 'SQL statement failed(select)!!';
					echo mysqli_error($conn);
				}		
			} else{
				echo 'The file size is too large';
			}	
		}else{
			echo 'Oops there was an error!';
		}	
	} else{
		echo 'Please input proper image format!';
		exit();
	}	
}