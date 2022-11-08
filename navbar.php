<?php
session_start();
$user_id = $_SESSION["user_id"];
$role = $_SESSION["role"];
echo $role;
echo $user_id;
if(isset($_SESSION["user_id"]) and isset($_SESSION["role"])){
?>
<html>
    <head>
        <style>
            ul{
                list-style-type: none;
                margin : 0;
                padding : 0;
                overflow : hidden;
                background-color: blue;
            }
            li{
                float : right;
            }
            li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
        
        </style>
    </head>
    <body>
        <?php
        if($role == "admin"){
        ?>
        <ul>
            <li><a href="backend/navbar-back.php?status=logout">Logout</a></li>
            <li><a href="admin-dashboard.php">MOHs</a></li>
        </ul>
        <?php } ?>



        <?php
        if($role == "MOH"){
        ?>
        <ul>
            <li><a href="backend/navbar-back.php?status=logout">Logout</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="announcement-moh.php.php">Announcement</a></li>
            <li><a href="vaccination-history.php">Personal History</a></li>
            <li><a href="smart-vaccination-moh.php">Smart Vaccination</a></li>

        </ul>
        <?php } ?>




        <?php
        if($role == "public"){
        ?>
        <ul>
            <li><a href="backend/navbar-back.php?status=logout">Logout</a></li>
            <li><a href="announcement-moh.php">Announcement</a></li>
            <li><a href="req-smartVaccination.php">Smart Vaccination</a></li>

        </ul>
        <?php } ?>
    </body>
</html>


<?php } ?>