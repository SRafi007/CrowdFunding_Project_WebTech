<?php
require("../models/usermodel.php");
$totalEarninng='0';
$totalDonation='0';
$totalUser='0';
	$con = getConnection();
	$sql="select * from user";
	$result = mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($result)){
		$totalUser=$totalUser+1;
	}

$con = getConnection();
$sql="select * from bank";
	$data = mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($data)){
		$mny=$row['membership'];
		$totalEarninng=$totalEarninng+$mny;
	}

	$sql="select * from bank";
	$data = mysqli_query($con, $sql);
	while($row=mysqli_fetch_assoc($data)){
		$dnt=$row['donation'];
		$totalDonation=$totalDonation+$mny;
	}

	

?>
<!DOCTYPE html>
<head>
<title></title>
</head>
<body>
<table style="background-color: lightpink; margin-left:10%;" width="80%">
<tr>
	<td colspan=2>
		Logo
	</td>
	

	<td align ="right"><a href="../controllers/logout.php">LOGOUT</a>
	</td>
</tr>
<tr style="background-color:lightgreen ;">
	<td align ="center">Total Earning
	</td>
	
	<td align ="center">Total Donation
	</td>
	

	<td align ="center" >Total User
	</td>
</tr>
<tr style="background-color:lightgreen ;">
	<td align ="center"><h3 style="font-size: 50px"><?=$totalEarninng?></h3>
	</td>
	
	<td align ="center"><h3 style="font-size: 50px"><?=$totalDonation?></h3>
	</td>
	

	<td align ="center"><h3 style="font-size: 50px"><?=$totalUser?></h3>
	</td>
</tr>
</table>
</body>



</html>
