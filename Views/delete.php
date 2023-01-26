<?php 
	require('../views/header.php');
	require('../models/userModel.php');
    $id="";
    if(isset($_GET["id"])){$id= $_GET["id"];}
	//$id= $_GET["id"];
	$name="";
	$mail="";

    $data=getUserByID($id);
    $name=$data[1];
    $mail=$data[4];

		//$id= $_GET['id'];
	if(isset($_REQUEST['submit']))
	{
		$data=getUserByID($id);
    
			$status = deleteUser($id);
			if($status)
			{
				header('location: ../views/adminPage.php');
			}
			else
			{
				echo "Failed";
			}
    }

?>

<html>
<head>
	<title>DELETE User</title>
</head>
<body>

	<a href="../adminPage.php"> <img src="../models/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a> |
	<a href="../controllers/logout.php"> logout</a>

	<form method="POST" action="">
		<fieldset>
			<legend>DELETE USER</legend>
		
		<table>
			<tr>
				<td>Username: </td>
				<td>
					<?=$name?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>
					<?=$mail?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="CONFIRM DELETE!">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>
