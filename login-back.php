<?php
session_start();

include("dbs.php");

if(isset($_POST["submit"])){

    $username = $_POST["uname"];
    $password = $_POST["password"];
    $avail = false;

        if($_POST["role"]=="admin"){
            $quary = "SELECT * FROM admin;"; 
            $reslut = $connect -> query($quary);
            while($row = $reslut -> fetch_assoc()){
                if($row['user_name']== $username and $row['password']== $password){
                    echo "admin";
                    $avail = true;
                    $_SESSION["role"] = $_POST["role"];
                    $_SESSION["user_id"] = $row["admin_id"];
                    header("location:admin-dashboard.php");
                    break;
                }
            }
    
        }
        if($_POST["role"]=="MOH"){
            $quary = "SELECT * FROM moh;"; 
            $reslut = $connect -> query($quary);
            while($row = $reslut -> fetch_assoc()){
                if($row['user_name']== $password and $row['password']== $username){
                    echo "MOH";
                    $avail = true;
                    $_SESSION["role"] = $_POST["role"];
                    $_SESSION["user_id"] = "MOH";
                    header("location:smart-vaccination-moh.php");
                    break;
                }
             }   
        }
        if($_POST["role"]=="public"){
            $quary = "SELECT * FROM public;"; 
            $reslut = $connect -> query($quary);
            while($row = $reslut -> fetch_assoc()){
                if($row['user_name']== $username and $row['password']== $password){
                    echo "public";
                    $avail = true;
                    $_SESSION["role"] = "public";
                    $_SESSION["user_id"] = $row["public_id"];
                    header("location:public-dash.php");
                    break;
                }
            }
        }
    

    if(!$avail){
        header("location:index.php");
    }
 
}
?>