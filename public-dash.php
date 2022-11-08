<?php
session_start();
include("dbs.php");
$user_id = $_SESSION["user_id"];
$query = "SELECT * FROM public WHERE public_id = '$user_id' ;";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public-dash</title>
</head>
<body>
<?php include("navbar.php") ?>
    <label for="">Full Name : <?php echo $row["f_name"] ?> <?php echo $row["l_name"] ?></label><br>
    <label for="">Address : <?php echo $row["address"] ?></label><br>
    <label for="">Gender : <?php echo $row["gender"] ?></label><br>
    <label for="">NIC/Passpot : <?php echo $row["NIC_no"] ?></label><br>
    <label for="">Date of Birth : <?php echo $row["DOB"] ?></label><br>
    <label for="">Vaccination Details : <?php echo $row["f_name"] ?></label><br>
    <label for="">Vaccination Status : <?php echo $row["f_name"] ?></label><br>

</body>
</html>