<?php
require("../models/messageModel.php");
$msg=$_POST['data'];

$json = json_decode($msg);
//print($json->id);
$message=$json->msg;
$id=$json->id;
$status=insertMessage($id,$message, '0');
?>