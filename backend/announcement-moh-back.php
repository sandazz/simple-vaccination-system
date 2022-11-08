<?php
session_start();
include("../dbs.php");

if(isset($_POST["add"])){
    $date = $_POST["date"];
    $vaccine = $_POST["vaccine"];
    $venue = $_POST["venue"];
    $ageGruop = $_POST["ageGroup"];
    $dosage = $_POST["dosage"];

    $queryAnnouncement = "INSERT INTO announcement (announcement_id, date, vaccine, venue, age_group, dosage) VALUES (NULL, '$date', '$vaccine', '$venue', '$ageGruop', '$dosage');";

    $connect->query($queryAnnouncement);

}




?>