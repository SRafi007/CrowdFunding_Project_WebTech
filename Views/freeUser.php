<?php
require('../views/header.php');
require('../models/userModel.php');
session_start();
$name=$_SESSION['name'];
$myId=$_SESSION['id'];

?>

<!Doctype html>
<html>
<head><title>profile</title>
	<style type="text/css">
		.table1 {
			background-color:khaki;
			height: 900px;
			border-color: black;
			border: 10px;
		}
		.contentBody {
			background-color: wheat;
		}
	</style>
</head>
<body >
	<form action="" method="POST" class="table1">
	<table broder="1px" width="100%" >
		<tr>
			<td colspan="3" style="background-color: khaki;">
				<a href="../views/freePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px;border-radius: 5px;"></a>
			</td>
		</tr>
		<tr>
			<td width="30%"  valign="top">
			</td>
			<td width="40%" valing="center"> 
			    <?php
			    $data=getUserByID($myId);
			    $profilePic=$data[5];
				?>
            <img src="<?=$profilePic?>" alt="image" style="width:200px; border-radius: 15px 15px;"><br>
            <h3><?=$name?></h3>
			</td>

			<td width="30%">
			 <a href="../views/edit.php">EDIT PROFILE </a></td>
		</tr>
		<tr>
			<td></td>
			<td class="contentBody">    
		    </td>
			<td ></td>
		</tr>
	</table>
	</form>
</body>
</html>