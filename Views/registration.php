<?php 
$message="";
if(isset($_GET['msg'])){
	$message=$_GET['msg'];
}
?>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<script type="../assets/regScript.js"></script>
	<form method="POST" action="../Controllers/regCheck.php" onsubmit="return validateForm()">
		<table  width="100%">
			<tr>
				<td></td>
				<td><img src="../assets/logos/CrowdContentSignUp.jpeg" alt="Sign Up" style="width: 300px;height:300px"></td>
				<td></td>
			</tr>
			<tr>
				
				<td width="40%">
					
				</td>
				<td>
					<table >
						<tr>
						<td><h3>Username:</h3></td>
						<td><input type="text" name="username" id="username" value=""></td></tr>
						<tr><td><h3>Email   :</h3></td>
						<td><input type="email" name="email" id="email" value=""></td></tr>
						<tr><td><h3>Password:</h3></td>
						<td><input type="password" name="password" id="password" value=""></td></tr>
						<tr><td><h3>Confirm Password:</h3></td>
						<td><input type="password" name="cpassword" value=""></td></tr>
					</table>
				</td>
				<td width="30%">

				</td>
			</tr>

			<tr>
				<td></td>
				<td >
					<input type="submit" name="submit" value="Submit"><h3><?=$message?></h3></td>
					
				</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><h3> ------------------------------------------------</h3>
					<a href="../views/login.php"><img src="../assets/logos/signinlogo.png" alt="Sign Up" style="width: 300px;height:30px"></a></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>