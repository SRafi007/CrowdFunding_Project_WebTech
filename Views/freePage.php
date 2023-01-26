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
			background-color:lightsalmon;
			border-radius: 35px;
		}
	</style>
</head>
<body>
	<from>
	<table  width="100%" >
		<tr class="header"> <! The Header Contain Logo , Navigations etc>

			<td colspan="3" ><a href="../views/freePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" class="logo" style="width:60px;height:60px"></a></td>

		</tr>

		<tr > 
			<td width="30%" valign="top" class="side">
			<h3 class="textMiddle"> <?=$name?></h3>
		
			<button class="button2" type="button" onclick="location.href='../views/freeUser.php'">PROFILE</button>
			<br>
			<button class="button2" type="button" onclick="location.href='../views/member.php'">MEMBERSHIP</button><br>
			<button class="button2" type="button" onclick="location.href='../controllers/logout.php'">LOG OUT</button>

			<h3>People you are following </h3><br>
				<?php
				$con=getConnection();
				$sql="select * from userplus where id='{$myId}'";
				$result=mysqli_query($con,$sql);
				$dataPlus=mysqli_fetch_row($result);
				$followList=$dataPlus[1];
				$fl=explode("|", $followList);

		        
		        for($i=0;$i<count($fl)-1;$i++){
		        $finfo=getUserByID($fl[$i]);
		        $fName=$finfo[1];
		        $fid=$fl[$i];
		              ?>
                    
		            <a href="../views/profile.php?id=<?=$fid?>">🔴<?=$fName?></a><br>
	
		        <?php } ?>



		</td>


			<td width="40%">
				<style>
	          		body {
			        margin-bottom: 0%;
			        }

			        /* Box styles */
			        		.myBox {
			        	background-color: aliceblue;
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
							<div style="background-color:mediumaquamarine;border-radius: 10px;margin-bottom: 5px; ">
					
					<?php  $content=$row['content'];
					    $cid=$row['Id'];
					    $ctype=$row['type'];
					    $caption=$row['caption'];
					    $contentCreator=getUserByID($cid);
					    $cName=$contentCreator['1'];
					    $cPicture=$contentCreator['5'];
					    ?>
					    
                        <a href="../views/profile.php?id=<?=$cid?>"><img src="<?=$cPicture?>" alt='image' style="width:60px; /*profile picture*/
                        height:60px; border-radius:30px;margin-top:5px;margin-left: 5px;"><?=$cName?></a></br>
                        <?php 
                        if($ctype==1){ ?>
                        <a href="../views/member.php"><img src="../assets/logos/01unlockPost.png" alt='image' style="width:600px;border-radius: 15px 15px;"></a></br> 
                                                <h3>     </h3> 
                        <?php }
                        else{ ?>

                        <h3 class="Caption" style="font-size: 15px;"><?=$caption?></h3>
					    <img src="<?=$content?>" alt='image' style="width:600px;border-radius: 5px;margin-left: 2px;"></br> 
					    <button type="button" style="margin-left: 5px; background-color: lightsalmon; border-radius: 5px;" onclick="paycheck(<?=$cid?>)">Donate</button> 
					    <h3>     </h3>
					    					
                        <?php
                        } ?>
                        </div>

					   <?php } ?>
					
				</div>


			</td>
			<td width="30%" valign="top" class="side">
				<h3 class="textMiddle">DISSCUSION</h3>
				<style>
	          		body {
			        margin-bottom: 0%;
			        }

			        /* Box styles */
			        

			    </style>

				<div class="messageBox" id="messageBox">
					<?php 
					$con=getConnection();
					$sql="select * from message";
					$mdata=mysqli_query($con,$sql);
					while($row=mysqli_fetch_assoc($mdata)){ 
						$mid=$row['id'];
						$message=$row['message'];
                    //getting data for sender
						$udata=getUserByID($mid);
						$uname=$udata[1];
						?>
						<label class="senderName"><?=$uname?>:</label>
						<div class="soloMessage">
						<?=$message?>
					</div>
					<?php } ?>

				</div>
					<input type="text" id="name" name="name" value="" class="inputMessage">
					<input type="button" name="" value="click" onclick="ajax(<?=$myId?>)">
					<script type="text/javascript" src='../Controllers/freeScript.js'></script>
				
				
			</td>
		</tr>
	</table>
</from>
</body>
</html>