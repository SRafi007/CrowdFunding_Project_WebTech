<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
  
  if(isset($_REQUEST['upload'])&&isset($_REQUEST['caption'])&&isset($_REQUEST['ctype'])){
    $cap=$_REQUEST['caption'];
    $type=$_REQUEST['ctype'];
  require('../models/contentModel.php');
  $image=$_FILES['myfile'];
 if(move_uploaded_file($image['tmp_name'],"../assets/content/".$image['name'])){
  $str="../assets/content/".$image['name'];
  $status = uploadContent($id, $str,$type,$cap);
  header("Location:../views/uploadPicture.php");
 }
}
else{
  header("Location:../views/uploadPicture.php");
}
?>