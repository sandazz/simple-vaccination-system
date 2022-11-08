<?php
include("../dbs.php");
if(isset($_POST["update"])){
   
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $nic = $_POST["nic"];
    $dob = $_POST["dob"];
    $district = $_POST["district"];
    $nameMOH = $_POST["nameMOH"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $newpassword = $_POST["newpassword"];
    
    $query = "INSERT INTO public (public_id, f_name, l_name, gender, mobile_no, address, district, MOH, DOB, NIC_no, user_name, password) VALUES (NULL, '$fname', '$lname', '$address', '$contact', '$gender', '$nic', '$dob', '$district', '$nameMOH', '$username', '$password');";
    $connect -> query($query);
}
?>