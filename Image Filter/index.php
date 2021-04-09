<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Filter</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<form action="includes/imgupload.inc.php" method="post" enctype="multipart/form-data">
		<label class="upload">
		    <input type="file" name="file" />
		    <i class="fas fa-cloud-upload-alt"></i> Customize Your Own Image!
		</label>
		<button type="submit" name="confirm" class="btn">Confirm!</button>
	</form>
	<div class="container">
		<?php 
			include_once 'includes/dbh.inc.php';
			$sql = "SELECT * from img order by imgOrder desc limit 1";
			$stmt = mysqli_stmt_init($conn);
			if (mysqli_stmt_prepare($stmt, $sql)) {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<img src="uploads/'.$row["imgName"].'" id="img">';
					?>
				
		<div class="controls" data-tilt>
			<label>Blur</label>
			<input type="range" max="20" min="0" value="0" onchange="blurf(this.value)" id="blur">
			<label>Brightness</label>
			<input type="range" max="2" min="0" value="1" onchange="brightnessf(this.value)" id="brightness">
			<label>Contrast</label>
			<input type="range" max="200" min="0" value="140" onchange="contrastf(this.value)" id="contrast">
			<label>Grayscale</label>
			<input type="range" max="100" min="0" value="0" onchange="grayscalef(this.value)" id="grayscale">
			<label>Hue-rotate</label>
			<input type="range" max="360" min="0" value="0" onchange="hueRotatef(this.value)" id="hueRotate">
			<label>Invert</label>
			<input type="range" max="100" min="0" value="0" onchange="invertf(this.value)" id="invert">
			<label>Opacity</label>
			<input type="range" max="100" min="0" value="100" onchange="opacityf(this.value)" id="opacity">
			<label>Saturate</label>
			<input type="range" max="20" min="0" value="1" onchange="saturatef(this.value)" id="saturate">
			<label>Sepia</label>
			<input type="range" max="100" min="0" value="50" onchange="sepiaf(this.value)" id="sepia">
		</div>
		<div class="presets">
			<?php 
				echo '<img src="uploads/'.$row["imgName"].'" class="filter1" onclick="filter1()" data-tilt data-tilt-scale="1.3">
					<img src="uploads/'.$row["imgName"].'" class="filter2" onclick="filter2()" data-tilt data-tilt-scale="1.3">
					<img src="uploads/'.$row["imgName"].'" class="filter3" onclick="filter3()" data-tilt data-tilt-scale="1.3">';
			}
			}else{
				echo mysqli_error($conn);
			}
		 ?>
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="vanilla-tilt.js"></script>
</body>
</html>