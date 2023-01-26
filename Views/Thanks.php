<?php 
    require('../views/header.php');
	session_start();
	$myId=$_SESSION['id'];

	
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<form method="POST" action="">
		<table>
			<tr><td align="center"> <h3>Thank You<b></h3>
				<img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px">
		<a href="../Controllers/logout.php">Continue</a></td>
		</td>
	</tr>
		</table>
	</form>
</body>
</html>

