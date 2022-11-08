<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "vaccination";


$connect = mysqli_connect($host,$dbUsername,$dbPassword,$dbName);
if($connect-> connect_error){
    echo "not connected";
}else{

}
?>