<?php 
require('../models/bankModel.php');
$cid=$_POST['data'];
session_start();
$id=$_SESSION['id'];

$json = json_decode($cid);
print($json->cid." taka donated to this content".$id);
$path=$json->cid;

$con=getConnection();
$sql = "insert into bank values('','{$id}','0', '10','{$path}')";
mysqli_query($con,$sql);

?>