<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'webtech';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}



function login($username, $password){		
	$con = getConnection();
	$sql = "select * from user where name='{$username}' and password='{$password}'";
	$result = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result)){
		return true;
	}else{
		return false;
	}
}

function signup($username, $password, $email){		
	$con = getConnection();
	$sql = "insert into user values('','{$username}', '{$password}','0', '{$email}', '../assets/logos/blankProfilepic.png','')";

	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function getUserByID($id){
	$con = getConnection();
	$sql = "select * from user where id='{$id}'";
	$result =mysqli_query($con,$sql);
	$row=mysqli_fetch_row($result);
	$info=$row;
    return $info;

}
function getUserByUserInfo($name,$pass){
	$con = getConnection();

	$sql="select id from user where name='{$name}' and password='{$pass}'";
	$data=mysqli_query($con,$sql);
	$row=mysqli_fetch_row($data);
	$id=$row['0'];
    return $id;

}
function checkUsername($name){

	$con = getConnection();
	$sql="select id from user where name='{$name}'";
	$data=mysqli_query($con,$sql);
	$row=mysqli_fetch_row($data);
	$id=$row['0'];
	if(empty($row['0'])){
		return true;
	}else{
		return false;
	}

}
function updateUser($id,$username,$pass,$mail){

	$con = getConnection();
	$sql = "UPDATE user SET name = '{$username}', password = '{$pass}', email='{$mail}'  WHERE id='{$id}';";

	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}

}
function membershipUpgrade($id)
{
	$con = getConnection();
	$sql = "UPDATE user SET role = '1'  WHERE id='{$id}'";

	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}

}

function updateProfilePicture($id,$pic){
$con = getConnection();
	$sql = "UPDATE user SET profilePicture='{$pic}'  WHERE id='{$id}';";

	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteUser($id){

	$con = getConnection();
	$sql = "DELETE FROM user WHERE id='{$id}'";

	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}

}

?>