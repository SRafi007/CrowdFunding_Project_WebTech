<?php 
require('../views/header.php');
require('../models/userplusModel.php');
session_start();
$id="";
$newData="";
$myId=$_SESSION['id'];
if(isset($_GET["id"])){$id= $_GET["id"];}
if(isset($_REQUEST['submit'])){

$dataSet=getuserplusByID($myId);
$data=$dataSet[1];

$newData=$data.$id.'|';
echo $myId;

updateFollowSheet($newData,$myId);
header('location:../views/profile.php?id='.$id.'');
}
?>