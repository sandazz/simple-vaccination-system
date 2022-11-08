<?php
if(isset($_GET["status"]) and $_GET["status"]=='logout'){
    echo "logout";
    session_destroy();
    header("location:../index.php");
}
?>