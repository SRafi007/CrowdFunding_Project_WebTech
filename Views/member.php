<?php 
require('../views/header.php');
require('../models/userModel.php');
session_start();
$name=$_SESSION['name'];
$myId=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form>
	<table  width="100%">
		<tr>
			<th colspan="3"><a href="../views/freePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				<h3>Upgrade to Unlock more</h3>
			</th>

		</tr>

		<tr>
			<td align="right">
				<a href="../views/payment.php?val=499 "><img src="../assets/logos/monthly.png" alt="image" style="width:300px;"></a>
			</td>
			<td align="center">
				<a href="../views/payment.php?val=4999 "><img src="../assets/logos/annual.png" alt="image" style="width:300px;"></a>
			</td>
			<td align="left">
				<a href="../views/payment.php?val=2999 "><img src="../assets/logos/6month.png" alt="image" style="width:300px;"></a>
			</td>
		</tr>

	</table>
</form>
</body>
</html>