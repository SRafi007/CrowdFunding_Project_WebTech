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
	$sql = "select * from message";
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
	$sql = "insert into message values('{$cnt}','{$id}', '{$msg}','{$rec}')";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
}

function getMessageByID($id){
	$con = getConnection();
	$sql = "select * from message where id='{$id}'";
	$result =mysqli_query($con,$sql);
	$row=mysqli_fetch_row($result);
	$info=$row;
    return $info;

}





?>