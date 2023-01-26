<?php 
	//session_start();
	//print_r($_SESSION);
?>

<html>
<head>
	<title>Signup</title>
</head>

<body>
	<script src="../Controllers/loginScript.js"></script>
	<form   method="POST" action="../Controllers/loginCheck.php" onsubmit="return validateForm()">
		<table  width="100%">
			<tr>
				<td></td>
				<td><img src="../assets/logos/CrowdContentSignIn.jpeg" alt="Sign Up" style="width: 300px;height:300px"</td>
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
						<tr><td><h3>Password:</h3></td>
						<td><input type="password" name="password" id="password" value="">
							<h1 id='h1'></h1></td></tr>
					</table>
				</td>
				<td width="30%">

				</td>
			</tr>

			<tr>
				<td></td>
				<td >
					<input type="submit" id='submit' name="submit" value="Submit"></br>
					<h3> </h3>
                    <h3><a href="../views/registration.php"> Or Sign Up</a></h3>
				</td>
				<td></td>
			</tr>
		</table>
	</form>
	
</body>
</html>