<?php
require('../views/header.php');
require('../models/userModel.php');
session_start();
$check=0;
$id="";
$role=$_SESSION['role'];

if(isset($_GET["id"])){$id= $_GET["id"];}
if(isset($_REQUEST['submit'])){
}
?>

<!Doctype html>
<html>
<head><title>profile</title>
	<style type="text/css">
		.Button1{
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<form action="../Controllers/followSheet.php?id=<?=$id?>" method="POST">
	<table broder="1%" width="100%" >
		<tr>
			<td width="30%" valign="top">
				<?php 
				if($role==0){ ?>
				<a href="../views/freePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
			<?php }
			else if($role==1){ ?>
				<a href="../views/memPage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				<?php }
			else if($role==2){ ?>
				<a href="../views/homePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				<?php }
			else if($role==3){ ?>
				<a href="../views/adminPage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
			<?php } ?>

				</td>
			<td width="40%" aling="center"> 
			    <?php
			    	$data=getUserByID($id);
			        $profilePic=$data[5];
			        $pname=$data[1];
				?>
				<img src=<?=$profilePic?> alt="image" style="width:300px; border-radius: 15px;">
				<h3><?=$pname?> <input type="submit" name="submit" value="Follow"><br>
					</h3>
			</td>

			<td width="30%"> </td>
		</tr>
		<tr>
			<td></td>
			<td>    
			        <?php 
			            $con=getConnection();
						$sql="select * FROM content ";
						$data=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($data)){ 
						$content=$row['content'];
					    $cid=$row['Id'];
                        if($cid==$id){
					    ?>
			     	<img src=<?=$content?> alt="image" style="width:600px; border-radius:15px;"><br>
			     	<?php
			     	}} ?> 
		       </td>
			<td ></td>
		</tr>
	</table>
	</form>
</body>
</html>