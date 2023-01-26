<?php 
require('../models/userModel.php');
require('../views/header.php');
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>community</title>
</head>
<body>
	<form method="" action="">
		<table style="background-color: lightcyan;"  width="100%">
			<tr style="background-color: lightsalmon;">
				<td colspan="3">
					<a href="../views/memPage.php"><img src="../assets/Logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				</td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="60%">
					<h3 class="textMiddle">CrowdContent Community</h3>
				<style>
	          		body {
			        margin-bottom: 0%;
			        }
			        .messageBox {

			        	background-color: aliceblue;
			        	border-radius: 30px;
				        border: none;
				        padding: 5px;
				        font: 24px/36px sans-serif;
				        width: 100%;
				        height: 500px;
				        overflow: scroll;

			        }
			        .soloMessage{
			        	background-color: azure;
			        	margin-left: 15px;
			        	text-align: justify;
			        	border-radius: 10px;
			        	font-size: 15px;
			        }
                    .senderName{
                    	font-size: 20px;
                    }
			        /* Box styles */
			        

			    </style>

				<div class="messageBox" id="messageBox">
					<?php 
					$con=getConnection();
					$sql="select * from community";
					$mdata=mysqli_query($con,$sql);
					while($row=mysqli_fetch_assoc($mdata)){ 
						$mid=$row['id'];
						$message=$row['msg'];
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
					<input type="button" name="" value="click" onclick="ajax('22')">
					<script type="text/javascript" src='../Controllers/memScript.js'></script>
				
				</td>
				<td width="20%"></td>
			</tr>
			
		</table>
	</form>

</body>
</html>