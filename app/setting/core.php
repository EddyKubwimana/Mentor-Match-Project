<?php
session_start();
function isLogin(){

    if(!isset($_SESSION["userId"])){
        header("Location:../../app/login.php");
    }

}



?>

