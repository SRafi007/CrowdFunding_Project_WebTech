<?php 
//require('../views/header.php');
require('../models/contentModel.php');
session_start();
$name=$_SESSION['name'];
$myId=$_SESSION['id'];
$contentCount=0;
$Earning=0;
$con=getConnection();
$sql="select * FROM content where id='{$myId}'";
$data=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($data)){
	$contentCount=$contentCount+1;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<form action="" method="POST">
		<table width="80%" style="margin-left: 10%; margin-top:3%; background-color: coral;">
			<tr>
				<td colspan="2" width="33%">
					<a href="../views/homePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				</td>
				<td><a href="../views/uploadPicture.php">Upload Content </a><a href="../controllers/logout.php">Logout</a></td>
				</td>
				
			</tr>
				<tr style="background-color: lightcyan;">
				<td align="center" width="33%">Total Earning
				</td>
				<td align="center">Content Count</br>
					
				</td>
				<td align="center">Reports
				</td>
				
			</tr>

				<tr height="500px" style="background-color: lightcyan;">
				<td width="33%" align="center">
									<h3  style="font-size: 70px;"><?=$Earning?></h3></br>
					<h3  style="font-size: 30px;">Taka</h3>
				<?php
				$con=getConnection();
				$sql="select * FROM user where id='5'";
					$data=mysqli_query($con,$sql);
					while($row=mysqli_fetch_assoc($data)){
						$Earning=$row['money'];


					} 
				?>

				</td>		
				<td align="center"><h3  style="font-size: 70px;"><?=$contentCount?></h3></br>
					<h3  style="font-size: 30px;">Uploaded</h3>
				</td>
				<td>

				</td>
				
			</tr>
			
		</table>
	</form>
</body>
</html>