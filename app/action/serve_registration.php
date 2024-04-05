<?php
// Allow cross-origin requests from all domains (for testing purposes, adjust as needed)
header("Access-Control-Allow-Origin: *");

// Start session and include necessary files
session_start();
include("../setting/core.php");
include("../../config.php");
include("../function/get_your_programs.php");

// Store the HTML code in a variable
$htmlContent = '
<main id="main" class="main">
    <h3>Mentor Or Mentee Registration</h3>
    <div class="registration-container">
        <div id="mentor" onclick="registerMentor(' . $_SESSION['userId'] . ')">
            <p>Mentor</p>
        </div>
        <div id="mentee" onclick="registerMentee(' . $_SESSION['userId'] . ')">
            <p>Mentee</p>
        </div>
        <div id="registration" class="registration">
            <p>Registration</p>
            ' . isMentee($conn,$_SESSION["userId"]) . '
            ' . isMentor($conn,$_SESSION["userId"]) . '
        </div>
    </div>
    <h3>Courses Registration</h3>
    <div class="registration-container">
        <div id="mentor">
            <p>Mentor</p>
        </div>
        <div id="mentee">
            <p>Mentee</p>
        </div>
        <div id="registration">
            <p>Registration</p>
        </div>
    </div>
    <h3>Mentee or Mentor Management</h3>
    <div class="registration-container">
        <div id="mentor">
            <p>Mentor</p>
        </div>
        <div id="mentee">
            <p>Mentee</p>
        </div>
        <div id="registration">
            <p>Registration</p>
        </div>
    </div>
</main>
';

// Set the content type header to text/html
header('Content-Type: text/html');

// Return the content
echo $htmlContent;
?>
