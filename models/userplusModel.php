<?php 
function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'webTech';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}



function insertData(){		
	$con = getConnection();
	$sql = "insert into userplus values('','','','')";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function getuserplusByID($id){
	$con = getConnection();
	$sql = "select * from userplus where id='{$id}'";
	$result = mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
	$info=$row;
    return $info;

}

function updateFollowSheet($str,$id){
	$con = getConnection();
	$sql = "UPDATE userplus SET following='{$str}' WHERE id='{$id}'";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function getAllUser(){

}

function deleteUser($id){

}

?>