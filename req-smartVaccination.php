<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>req samrtVaccination</title>
</head>
<body>
<?php 
session_start();
include("navbar.php") ?>
<form action="backend/req-smartVaccination-back.php" method="post" enctype="multipart/form-data">
      
        <label for="">Passport/NIC No</label><input type="text" name="passportNo" id=""><br>
        <label for="">Full Name</label><input type="text" name="fname" id=""><br>
        <label for="">Age</label><input type="text" name="age" id=""><br>
        <label for="">Email</label><input type="text" name="email" id=""><br>
        <label for="">Documents</label>
        <input type="file" name="file"><br>
        
        <input type="submit" value="add" name="add">
        <input type="submit" value="clear" name="clear"><br>  
    </form>
</body>
</html>