<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'webTech';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}



function uploadContent($id, $content, $type,$cap){		
	$con = getConnection();
	$sql = "insert into content values('','{$id}','{$content}', '{$type}','{$cap}')";

	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function getContengtByID($id){
	$con = getConnection();
	$sql = "select * from content where id='{$id}'";
	$result = mysqli_query($con, $sql);
    $row=mysqli_fetch_row($result);
	$info=$row;
    return $info;

}

function updateUser(){

}

function getAllUser(){

}

function deleteUser($id){

}

?>