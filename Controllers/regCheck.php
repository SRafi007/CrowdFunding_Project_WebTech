<?php 
session_start();
require('../models/userModel.php');

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$cpassword = $_REQUEST['cpassword'];
	$email = $_REQUEST['email'];

	if($password!=$cpassword){
		header('location: ../views/registration.php');
	}

	if($username != null && $password != null && $email != null){
		$check=checkUsername($username);
		if($check){

				    	$status = signup($username, $password, $email);
	        $id=getUserByUserInfo($username, $password);
			
			if($status){
				$con=getConnection();
				$sql = "insert into userplus values('{$id}','','','')";
				mysqli_query($con,$sql);
				header('location: ../views/login.php');
			}else{
				header('location: ../views/registration.php');
			}

	    }
	    else
	    {
			header('location: ../views/registration.php?msg="This Username is Already taken Try another One"');
	    }


	}else{
		header('location: ../views/registration.php');
	}
}

?>