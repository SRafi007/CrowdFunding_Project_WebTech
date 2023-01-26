<?php
require('../views/header.php');
require('../models/userModel.php');
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
  
  if(isset($_REQUEST['upload'])){
  $image=$_FILES['myfile'];
    echo $image;
 if(move_uploaded_file($image['tmp_name'],"../assets/profile/".$image['name'])){
  $str="../assets/profile/".$image['name'];
  $status = updateProfilePicture($id,$str);
  header("Location:../views/profilePictureUpdate.php");
 }
}

?>