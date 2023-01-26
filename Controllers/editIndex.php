<?php
require("../models/userModel.php");
$data=$_POST['data'];
$json = json_decode($data);

$uname=$json->name;
$id=$json->id;
$mail=$json->mail;
$pass=$json->password;

print("Done");
//$id=$json->id;
//$status=insertMessage($id,$message, '0');
updateUser($id,$uname,$pass,$mail);
header('location: ../views/edit.php')
?>