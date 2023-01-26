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
			background-color:crimson;
			height: 900px;
		}
		.contentBody {
			background-color: wheat;
		}
		.button2{
			width: 100%;
		}
	</style>
</head>
<body >
	<form action="" method="POST" class="table1">
	<table broder="1px" width="100%" >
		<tr style="background-color: cornsilk;">
			<td width="30%"  valign="top"><a href="../views/memPage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
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

				<br>
				<button class="button2" type="button" onclick="location.href='../views/profilePictureUpdate.php'">EDIT PROFILE PICTURE </button><br>
				<button class="button2" type="button" onclick="location.href='../views/edit.php'">EDIT ACCOUNT</button>
			</td>
			<td class="contentBody">
			<h3>Unlocked Content   </h3>
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
				        height: 650px;
				        overflow: scroll;
				}
			</style> 
				<div class="myBox">
		              <?php
						$con=getConnection();
						$sql="select * FROM content ";
						$data=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($data)){ ?>
					
					<?php  $content=$row['content'];
					    $cid=$row['Id'];
					    $ctype=$row['type'];
					    $caption=$row['caption'];
					    $contentCreator=getUserByID($cid);
					    $cName=$contentCreator['1'];
					    $cPicture=$contentCreator['5'];
					    ?>
					    <div style="background-color:lightcyan;border-radius: 10px;margin-bottom: 5px;">
 
                        <?php 
                        if($ctype==1){ ?>
                        <a href="../views/profile.php?id=<?=$cid?>"><img src="<?=$cPicture?>" alt='image' style="width:60px; /*profile picture*/
                        height:60px; border-radius:30px;"><?=$cName?></a></br>
                        <a href="../views/member.php"><img src="<?=$content?>" alt='image' style="width:600px;border-radius: 15px 15px;"></a></br> 
                                                <h3>     </h3> 
                        <?php }
                        else{ ?>

 
					
					
                        <?php
                        } ?>
                    </div>
                    <?php 
					    } 
					?>
		    </div>
		    </td>
			<td ></td>
		</tr>
	</table>
	</form>
</body>
</html>