<?php 
require('../views/header.php');
require('../models/userModel.php');
session_start();
$id=$_SESSION['id'];
$amount="";
if(isset($_GET["val"])){$amount= $_GET["val"];}
 if(isset($_REQUEST['submit'])){
 	if(isset($_REQUEST['bank'])&&!empty($_REQUEST['acc'])&&!empty($_REQUEST['amount'])){
 	$status=membershipUpgrade($id);
 	if($status){	
 		$con = getConnection();
 		$sql = "insert into bank values('','{$id}','{$amount}', '0','0')";
            if(mysqli_query($con, $sql)){
       	header('location: ../views/Thanks.php');}
       	else{
       		Echo "Something Wrong";
       	}
      	}
      else{
      	Echo "Something Wrong";
      }
 	}

 }

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST">
	<table  border="1" width="50%" style="margin-left:25%; margin-top:10%; background-color: lightcyan;" > 

		<tr>
			<th colspan="3"><a href="../views/freePage.php"><img src="../assets/Logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a>
				<h3>BECOME A MEMBER</h3>
			</th>

		</tr>

		<tr>
			<td align="left" width="30%">

			</td>
			<td align="left" width="30%">
				<label for="acc">Account No:</label></br>
				<label for="amount">Amount:</label></br>
				<label for="pin">Pin No.:</label></br>
				
			</td>
			<td align="left" >
				<input type="text" id="fname" name="acc" value="" placeholder="017********"></br>
				<input type="text" id="amount" name="amount" value="<?=$amount?>"></br>
				<input type="text" id="pin" name="pin" value=""></br>
				
				
			</td>
		</tr>

		<tr>
			<td align="left" width="30%">
				
			</td>
			<td  width="30%">
				<input type="radio" id="bank" name="bank" value="Bikash" >
				<label for="Bikash">Bikash</label><br>
				<input type="radio" id="bank" name="bank" value="Rocket">
				<label for="Rocket">Rocket</label><br>
				<input type="radio" id="bank" name="bank" value="Nagad">
				<label for="Nagad">Nagad</label>
				
				
			</td>
			<td align="left" >
				
			</td>
		</tr>
				<tr>
			<td align="left" width="30%">

				
			</td>
			<td align="center" width="30%">
				<script type="text/javascript">
					function validationx(){
						let acc = document.getElementById('fname');
							let amount = document.getElementById('amount');
							let pin = document.getElementById('pin');
							//alert("Please Fill All  Empty Boxes");
							let accVal=acc.value;
							let pinVal=pin.value;
							let amVal=amount.value;
							let bank=document.getElementById('bank').value;

							if(acc.value=="" || amount.value=="" || pin.value==""){
							alert("Please Fill All  Empty Boxes");
							}
							else{
								if(accVal.length!=11 || accVal.chaAt(0)!=0 || accVal.chaAt(1)!=1){
									alert("please rewrite the acc");
								}
							}
							if(bank==""){
								alert("please select a bank");
							}
					}
				</script>
				<input type="submit" name="submit" value="Confirm">
				<script  src='../Controllers/payScript.js'></script>
				       <button class="button2" type="button" onclick="validationx()">Check </button></br>
				
			</td>
			<td align="left" >
				
			</td>
		</tr>


	</table>
</form>
</body>
</html>