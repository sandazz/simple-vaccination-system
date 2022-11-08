<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vaccination history</title>
</head>
<body>
<?php 
session_start();
include("navbar.php") ?>
    <form action="backend/vaccination-history-back.php" method="post">
        <label for="">Date</label><input type="text" name="date" id=""><br>
        <label for="">NIC</label><input type="text" name="nic" id=""><br>
        <label for="">Vaccination Product</label><input type="text" name="vaccineProduct" id=""><br>
        <label for="">Batch Number</label><input type="text" name="batchNumber" id=""><br>
        <label for="">Vaccination Status</label><input type="text" name="vaccineStatus" id=""><br>
        <input type="submit" name="add" value="Add">
        <input type="submit" name="clear" value="clear"><br>


    </form>
</body>
</html>