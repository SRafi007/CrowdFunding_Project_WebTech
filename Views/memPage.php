<?php
// Start the session
require('../views/header.php');
require('../models/userModel.php');
session_start();
$name=$_SESSION['name'];
$myId=$_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
	<style type="text/css">
		.header {
			background-color:lightyellow;
		}
		.side {
			background-color:linen;
		}

	</style>
</head>
<body>
	<table  width="100%" >
		<tr class="header"> <! The Header Contain Logo , Navigations etc>

			<td colspan="3" ><a href="../views/memPage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>

		</tr>

		<tr > 
			<td width="30%" valign="top" class="side">
			<h3> <?=$name?><a href="../views/editProfile.php">- View Profile</a></h3><br>
				<a href="../views/member.php">Upgrade</a><br>
				<a href="../controllers/logout.php">Logout</a></td></td>


			<td width="40%">
				<style>
	          		body {
			        margin-bottom: 0%;
			        }

			        /* Box styles */
			        .myBox {
			        	background-color: coral;
				        border: none;
				        padding: 5px;
				        font: 24px/36px sans-serif;
				        width: 620px;
				        height: 600px;
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
                        <a href="../views/profile.php?id=<?=$cid?>"><img src="<?=$cPicture?>" alt='image' style="width:60px; /*profile picture*/
                        height:60px; border-radius:30px;"><?=$cName?></a></br>
                        <?php 
                        if($ctype==1){ ?>
                        <a href="../views/member.php"><img src="../assets/logos/01unlockPost.png" alt='image' style="width:600px;border-radius: 15px 15px;"></a></br> 
                                                <h3>     </h3> 
                        <?php }
                        else{ ?>

                        <h3 class="Caption" style="font-size: 15px;"><?=$caption?></h3>
					    <img src="<?=$content?>" alt='image' style="width:600px;border-radius: 15px 15px;margin-left: 2px;"></br>  
					    <h3>     </h3>
					</div>
					
                        <?php
                        } 
					    } ?>
					?>
				</div>


			</td>
			<td width="30%" valign="top" class="side">
				<button type="button" onclick="location.href='../views/community.php'">OUR COMMUNITY</button>
				
			</td>
		</tr>
	</table>
</body>
</html>