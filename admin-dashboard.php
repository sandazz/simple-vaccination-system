<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-dash</title>
</head>
<body>
    <?php 
    session_start();
    include("navbar.php") ?>
    <form action="backend/admin-dash-back.php" method="post">
        <label for="">District</label>
        <select name="district" id="">
            <option value="jaffna">jaffna</option>
            <option value="vavuniya">vavuniya</option>
            <option value="anuradhapura">anuradhapura</option>
        </select><br>
        <label for="">Name of the MOH</label>
        <select name="nameMOH" id="">
            <option value="jaffna">jaffna</option>
            <option value="nallur">nallur</option>
        </select><br>
        <label for="">First Name</label><input type="text" name="fname" id=""><br>
        <label for="">Last Name</label><input type="text" name="lname" id=""><br>
        <label for="">Address</label><input type="text" name="address" id=""><br>
        <label for="">Contact No</label><input type="text" name="contact" id=""><br>
        <label for="">Username</label><input type="text" name="username" id=""><br>
        <label for="">Password</label><input type="password" name="password" id=""><br>
        <input type="submit" value="add" name="add">
        <input type="submit" value="clear" name="clear"><br>  
    </form>
</body>
</html>