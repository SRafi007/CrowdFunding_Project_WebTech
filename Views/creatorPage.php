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
			background-color:palegreen;
			height: 700px;
		}
		.contentBody {
			background-color: wheat;
		}
		.button2{
			background-color: wheat;
			width: 100%;
		}
		.button3{
			align-self: center;
		}
	</style>
</head>
<body >
	<form action="" method="POST" class="table1">
	<table broder="1px" width="100%" >
		<tr style="background-color: cornsilk;">
			<td width="30%"  valign="top"><a href="../views/freePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
			</td>
			<td width="40%" valing="center"> 

			</td>

			<td width="30%"></td>
		</tr>
		<tr>
			<td aling="top" style="position: absolute;">
				<?php
			    $data=getUserByID($myId);
			    $profilePic=$data[5];
				?>
            <img src="<?=$profilePic?>" alt="image" style="width:300px; border-radius:60px"><br>
            <h3><?=$name?></h3>
			<button class="button2" type="button" onclick="location.href='../views/profilePictureUpdate.php'">EDIT PROFILE PICTURE </button></br>

	            <button class="button2" type="button" onclick="location.href='../views/uploadPicture.php'">Upload Photo </button> </br>

				<button class="button2" type="button" onclick="location.href='../views/edit.php'">EDIT PROFILE </button>

				<button class="button2" type="button" onclick="location.href='../views/studio.php'">VIEW REPOT </button>

			</td>
			<td class="contentBody">   
			<style type="text/css">
				body {
			        margin-bottom: 0%;
			        }
				.myBox {

						background-color: coral;
				        border: none;
				        padding: 5px;
				        font: 24px/36px sans-serif;
				        width: 600px;
				        height: 600px;
				        overflow: scroll;
				}
			</style> 
				<div class="myBox">
		              <?php
		              	$con=getConnection();
						$sql="select * FROM content ";
						$data=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($data)){
					    $content=$row['content'];
					    $cid=$row['Id'];
					    $contentTag=$row['contentid'];
					    if($cid==$myId){
		            ?>
    
			     	<img src=<?=$content?> alt="image" style="width:580px; border-radius: 15px;">
			     	<button type="button" class="button3">Delete</button>
			     	<h3></h3>
			     	


		        <?php }

		    	} ?>
		    </div>
		    </td>
			<td ></td>
		</tr>
	</table>
	</form>
</body>
</html>