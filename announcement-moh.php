<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements-MOH</title>
</head>
<body>
<?php
session_start();
include("navbar.php") ?>
    <form action="backend/announcement-moh-back.php" method="post">
        <label for="">Date</label><input type="text" name="date" id=""><br>
        <label for="">Vaccine</label><input type="text" name="vaccine" id=""><br>
        <label for="">Venue(s)</label><input type="text" name="venue" id=""><br>
        <label for="">Age group</label><input type="text" name="ageGroup" id=""><br>
        <label for="">No. of dosage</label><input type="text" name="dosage" id=""><br>
        <input type="submit" value="add" name="add">
        <input type="submit" value="clear" name="clear"><br>
    </form>
</body>
</html>