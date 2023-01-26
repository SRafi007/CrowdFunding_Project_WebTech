<?php 
require('../views/header.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>ImageUpload</title>
</head>
<body>
  <form action="../Controllers/pictureUpload.php" method="post" enctype="multipart/form-data">
     <a href="../views/homePage.php"><img src="../assets/logos/CrowdContent-logos.jpeg" alt="image" style="width:60px;height:60px"></a><b></br>
    <label>UploadImage</label>
    <input type="file" name='myfile'>
    <br>
    <label>Enter Caption</label>
    <input type="text" name="caption">
    <br>
    <input type="radio" name="ctype" value="2"><label>For All User</label><br>
    <input type="radio" name="ctype" value="1"><label>For Members</label>
    <br>
    <input type="submit" name="upload" value="upload">
    <a href="../views/editProfile.php?id=<?=$myId?>"> Back</a>
    
  </form>
</body>
</html>