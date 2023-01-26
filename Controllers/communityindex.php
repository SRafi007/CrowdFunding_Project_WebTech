<?php 
require('../models/communityModel.php');

$msg=$_POST['data'];
$json = json_decode($msg);
//print($json->id);
$message=$json->msg;
$id=$json->id;
insertMessage($id,$message, '0');
header('header: ../views/community.php');

?>