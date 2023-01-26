<?php
// Start the session
require('../views/header.php');
require('../models/userModel.php');
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
<title></title
</head>
<body>
    <form>
	<table border="1" width="100%">

    	<tr>
    		<td><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></td>
    		<td><h3>Admin  :<?=$name?></h3><a href="../views/homePage.php">View Content</a></td>
    		<td><a href="../views/edit.php?id=<?=$id?>&typ=3">EDIT PROFILE </a><h3>    </h3><a href="../controllers/logout.php">Logout</a>
    			<a href="../views/dashboard.php?">DASHBOARD </a><h3>   </h3></td>    		
    	</tr>
    	<tr>
    		<td></td>
    		<td></td>
    		<td></td>    		
    	</tr>
    	<tr>
    		<td width="33%" valign="top"><h3>Free User</h3>
    			<?php 
    			$con=getConnection();
				$sql="select * FROM user ";
				$data=mysqli_query($con,$sql);
				while($row=mysqli_fetch_assoc($data)){	
			    $freename=$row['name'];
			    $cid=$row['Id'];
			    $ctype=$row['role'];
			    if($ctype==0){
  				?>
				<h3>🟢<?=$freename?>      ID:  <?=$cid?> ---<a href="../views/delete.php?id=<?=$cid?>">Delete</a></h3> <?php  } } ?>
    		</td>
    		


    		<td width="33%" valign="top">
    			<h3>Member</h3>
				<?php 
    			$con=getConnection();
				$sql="select * FROM user ";
				$data=mysqli_query($con,$sql);
				while($row=mysqli_fetch_assoc($data)){	
			    $freename=$row['name'];
			    $cid=$row['Id'];
			    $ctype=$row['role'];
			    if($ctype==1){
  				?>
				<h3>🔴<?=$freename?>      ID:  <?=$cid?> ---<a href="../views/delete.php?id=<?=$cid?>">Delete</a></h3> <?php  } } ?>
    		</td>




    		<td width="33%" valign="top">
    			<h3>Content Creator</h3>
				<?php 
    			$con=getConnection();
				$sql="select * FROM user ";
				$data=mysqli_query($con,$sql);
				while($row=mysqli_fetch_assoc($data)){	
			    $freename=$row['name'];
			    $cid=$row['Id'];
			    $ctype=$row['role'];
			    if($ctype==2){
  				?>
				<h3>🔵<?=$freename?>      ID:  <?=$cid?> ---<a href="../views/delete.php?id=<?=$cid?>">Delete</a></h3> <?php  } } ?>
    		</td>  			 		
    	</tr>

	</table>
	</form>
</body>
</html>