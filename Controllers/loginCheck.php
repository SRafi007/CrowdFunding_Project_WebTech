<?php 
session_start();
require('../models/userModel.php');

if(isset($_REQUEST['submit'])){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];


	/*if($username != null && $password != null){*/

		
			$status = login($username, $password);
		    $data= getUserByUserInfo($username, $password);

			if($status){
				$role=getUserByID($data);
				$myRole=$role[3];
				$_SESSION['role'] =$myRole;
				$_SESSION['id'] =$data;
				$_SESSION['status'] = "true";
				$_SESSION['name']=$username;
				$_SESSION['password']=$password;
				setcookie('status', 'true', time()+900, '/');
				if($myRole==0){
					header('location: ../views/freePage.php');
				}
				else if($myRole==3)
				{
					header('location: ../views/adminPage.php');
				}
				else if($myRole==1)
				{
					header('location: ../views/memPage.php');
				}
				else{
					header('location: ../views/homePage.php');
				//header('location: ../views/homePage.php');

				}

			}else{
				header('location: ../views/login.php?msg=error');
			}

    /*}
	
	else{
			header('location:../views/login.php');
	}*/

}

?>