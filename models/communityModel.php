<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'webtech';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}



function messageInfo(){		
	$con = getConnection();
	$sql = "select * from community";
	$result = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result)){
		return true;
	}else{
		return false;
	}
}

function insertMessage($id, $msg, $rec){
    $cnt="";		
	$con = getConnection();
	$sql = "insert into community values('{$cnt}','{$id}', '{$msg}','{$rec}')";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function getMessageByID($id){
	$con = getConnection();
	$sql = "select * from community where id='{$id}'";
	$result =mysqli_query($con,$sql);
	$row=mysqli_fetch_row($result);
	$info=$row;
    return $info;

}





?>