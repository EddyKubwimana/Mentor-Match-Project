<?php
session_start();
include("../../config.php");
unset($_SESSION["userId"]);
unset($_SESSION["firstName"]);
unset($_SESSION["lastName"]);
header("Location:../../app/login.php");
exit();