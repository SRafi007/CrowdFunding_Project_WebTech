<?php
// Start the session
require('../views/header.php');
session_start();
$name=$_SESSION['name'];
$myId=$_SESSION['id'];
$role=$_SESSION['role'];
$pass=$_SESSION['password'];
echo $myId;
echo $pass;
echo $name;
echo $role;


?>