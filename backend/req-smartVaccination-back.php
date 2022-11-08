<?php
session_start();
include("../dbs.php");
if(isset($_POST["add"])){
   
    $passportNo = $_POST["passportNo"];
    $fulName = $_POST["fname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $status = "requested" ;

    $user_id = $_SESSION["user_id"];


    $file = $_FILES["file"];
    $fileName = $_FILES["file"]["name"];
    $fileTempDestination = $_FILES["file"]["tmp_name"];
    $fileNameNew = uniqid('', true)."-".$fileName;
    $fileDestination = 'uploadDocuments/'.$fileNameNew;
    move_uploaded_file($fileTempDestination, $fileDestination);

    $query = "SELECT * FROM public WHERE public_id = '$user_id';";
    $result = $connect -> query($query);
    $row = $result->fetch_assoc();

    $fname = $row["f_name"];
    $lname = $row["l_name"];
    $address = $row["address"];
    $contact = $row["mobile_no"];

    $queryForSmartVaccination = "INSERT INTO smartvaccination (vaccination_id, public_id, nic, fname, lname, fullname, address, mobile, email, documents, age, status) VALUES (NULL , '$user_id', '$passportNo', '$fname', '$lname', '$fulName', '$address', '$contact', '$email', '$fileDestination', '$age' , '$status')";

    $connect->query($queryForSmartVaccination);
}
?>