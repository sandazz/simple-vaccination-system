<?php
session_start();
include("../dbs.php");

if(isset($_GET["status"]) and $_GET["status"]=="veiw"){
    echo "veiw";
    //not any specific function given to do
    header("location:../smart-vaccination-moh.php");
}

if(isset($_GET["status"]) and $_GET["status"]=="approved"){
    $vaccinationID = $_GET["vaccinationId"];
    $queryApprove = "UPDATE smartvaccination SET status = 'approved' WHERE smartvaccination.vaccination_id = '$vaccinationID';";
    $connect->query($queryApprove);
    header("location:../smart-vaccination-moh.php");
}

if(isset($_GET["status"]) and $_GET["status"]=="rejected"){
    $vaccinationID = $_GET["vaccinationId"];
    $queryRejected = "UPDATE smartvaccination SET status = 'rejected' WHERE smartvaccination.vaccination_id = '$vaccinationID';";
    $connect->query($queryRejected);
    header("location:../smart-vaccination-moh.php");
}

?>