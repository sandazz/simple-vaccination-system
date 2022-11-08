<?php
include("../dbs.php");
if(isset($_POST["add"])){
    $district = $_POST["district"];
    $nameMOH = $_POST["nameMOH"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query = "INSERT INTO moh (MOH_id, district, name_of_MOH, f_name, l_name, address, contact_no, password, user_name) VALUES (NULL, '$district', '$nameMOH', '$fname', '$lname', '$address', '$contact', '$username', '$password');";

    $connect -> query($query);
    header("location:../admin-dashboard.php");
}
?>