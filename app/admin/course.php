<?php
include("../setting/core.php");
isLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>

.registration-container {
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: row;
    justify-content: space-evenly; /* Change from align-content to justify-content */
    align-items: center; /* Align items vertically in the center */
}

 #registration1, #registration2, #registration3 {
    min-width: 200px;
    min-height: 200px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */
}




    </style>
</head>
<body>

<div class="sidebar">
    <a class = "option"><img src = "../images/option.png"></a>
    <nav>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="course.php">Course</a></li>
            <li><a href="mentor.php">Mentor</a></li>
            <li><a href="#me">Meeting</a></li>
            <li><a href="chat.php">Message</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="../action/logout_action.php">Logout</a></li>

        </ul>
    </nav>
</div>

<div class="content">
    <header>
        <h1>Welcome, <?php echo $_SESSION['firstName']?>!</h1>
    </header>

    <main>

    <h3> Mentor Or Mentee Registration </h3>

    <div class = "registration-container">

        <div id = "mentor">

        <p>Mentor</p>

        </div>

        <div id = "mentee">

            <p>Mentee</p>

        </div>


        <div id = "registration">

            <p> Registration</p>

        </div>


   </div>  

   <h3> Courses Registration <h3>

   <div class = "registration-container">

        <div id = "mentor">

        <p>Mentor</p>

        </div>

        <div id = "mentee">

            <p>Mentee</p>

        </div>


        <div id = "registration">

            <p> Registration</p>

        </div>


   </div>  


   <h3> Mentee or Mentor Management <h3>

   <div class = "registration-container">

        <div id = "mentor">

        <p>Mentor</p>

        </div>

        <div id = "mentee">

            <p>Mentee</p>

        </div>


        <div id = "registration">

            <p> Registration</p>

        </div>


   </div>  

   

    

    
    </main>
</div>


<script src="admin.js"></script>
</body>
</html>
