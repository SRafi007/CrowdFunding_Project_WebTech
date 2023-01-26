<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'webtech';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}




function getDataByID($id){
	$con = getConnection();
	$sql = "select * from bank where id='{$id}'";
	$result =mysqli_query($con,$sql);
	$row=mysqli_fetch_row($result);
	$info=$row;
    return $info;

}
function getDataByInfo($name,$pass){
	$con = getConnection();

	$sql="select id from bank where name='{$name}' and password='{$pass}'";
	$data=mysqli_query($con,$sql);
	$row=mysqli_fetch_row($data);
	$id=$row['0'];
    return $id;

}

function updateData($id,$membership,$donation,$path){
	$con = getConnection();
	$sql = "insert into bank values('0',{$id}', '{$membership}', '{$donation}','{$path}')";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}

}


function getAllUser(){

}


?>