<?php
session_start();
include("../dbs.php");
if(isset($_POST["add"])){
    $date = $_POST["date"];
    $nic = $_POST["nic"];
    $vaccineProduct = $_POST["vaccineProduct"];
    $batchNumber = $_POST["batchNumber"];
    $vaccinationStatus = $_POST["vaccineStatus"];

    $queryFindPublicId = "SELECT * FROM public WHERE NIC_no = '$nic';";
    $result = $connect->query($queryFindPublicId);
    $row = $result->fetch_assoc();

    $public_id = $row["public_id"];

    $queryVaccination = "INSERT INTO vaccination (vaccination_id, public_id, date, nic, vaccine_product, batch_number, vaccination_status) VALUES (NULL, '$public_id', '$date', '$nic', '$vaccineProduct', '$batchNumber', '$vaccinationStatus');";
    $connect->query($queryVaccination);


}

?>