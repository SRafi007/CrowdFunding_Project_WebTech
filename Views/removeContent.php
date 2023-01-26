<?php
require('../views/header.php');
require('../models/userModel.php');
session_start();
$name=$_SESSION['name'];
$myId=$_SESSION['id']; 
$content="";
if(isset(var))


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="" enctype="multipart/form-data">
		<table width="70%" style="background-color: lightslategray; margin-left: 15%;">
			<tr>
				<td >
					<a href="../views/homePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				</td>
			</tr>
			<tr>
				<td align="center">
					<?php 
					$con=getConnection();
						$data=getUserByID($myId);
						$pic=$data[5];
						
						?>
						<img src="<?=$pic?>" alt="image" style="width:500px;"><br>
						<input type="file" name='myfile' id="myfile"><br>
						<input type="submit" name="upload" value="upload">

				</td>
			</tr>
		</table>
	</form>

</body>
</html>