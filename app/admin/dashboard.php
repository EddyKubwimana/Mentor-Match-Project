<?php
include("../setting/core.php");
include("../../config.php");
include("../function/get_your_programs.php");
isLogin();

$userId = $_SESSION['userId'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
    </style>
</head>
<body>

<div class="sidebar">
            <a class = "option"><img src = "../images/option.png"></a>
            <nav>
                        <ul>
                            <li><a href="../../index.php"><img src = "../images/home.png">Home</a></li>
                            <li><a href="dashboard.php"><img src = "../images/dasboard.png">dashboard</a></li>
                            <li><a href="chat.php"><img src = "../images/inbox.png">Message</a></li>
                            <li><a href="profile.php"><img src = "../images/account.png">Profile</a></li>
                            <li><a href="../action/logout_action.php"><img src = "../images/logout.png">Logout</a></li>

                        </ul>
            </nav>
               
</div>

 <div class="content">
                    <header>
                        <h1>Welcome, <?php echo $_SESSION['firstName']?>!</h1>
                    </header>


    <div class="container-search">
        <input type="text" id="searchInput"  class = "search-input" placeholder="Search a mentor .">
        <div id="searchResults"></div>
    </div>




                    
        

<main id = "main" class = "main" >

        <h3> Mentors and Mentees Management </h3>

<div class ="registration-container">



    <div class="options" onclick = "displayMentor()">
        
        <p> Mentors<p>
        
    
    </div>

    <div class="options" onclick = "displayMentee()">
        
        <p> Mentees<p>
        
    
    </div>

    <div class="options" onclick = "displayPendingMentee()" >
        
        <p> Pending Request<p>
        
    
    </div>

    <div class="options"  onclick = "displayPending()">
        
        <p> Pending Demand<p>
        
    
    </div>

    </div>

    <div class="container-search">

       <div id="mentorInfo">


       </div>

</div>

            <h3> Mentor Or Mentee Registration </h3>

            <div class="registration-container" onclick="updateStatus()">
                <div id="registration1" class="registration">
                    <p><span>Register</span> Or <span>Withdraw</span> From</p>
                     <p>Becoming A <span>Mentee</span> Or <span>Mentor</span></p>
                     <div class="mentor-status">
                        <p>Mentor Status: <span id="mentorStatus"></span></p>
                        <button id="mentorAction"onclick = 'generalOptionMentor(<?php echo"$userId"?>)'></button>
                    </div>
                    
                    <div class="mentor-status">
                        <p>Mentor Status: <span id="menteeStatus"></span></p>
                        <button id="menteeAction" onclick = 'generalOptionMentee(<?php echo"$userId"?>)' ></button>
                   </div>


                </div>
            </div>




            <h3> Course Registration and Management</h3>

            <div class = "registration-container">


                        <div id="registration2" class="registration">

                           
                        <h5> Add a course you want to mentor</h5>
                        <form method = "post">

                            <select id="select-mentor-course">
                            <option name = "courseId"  value="">Select a course</option>
                                <?php displayCourse($conn) ?>
                            </select>
                            <button onclick = 'addMentorCourse()'> <img src = "../images/add.png"></button>

                        </form>

                         

                         <h5> Add a course you want to be mentored</h5>

                        <form method = "post">


                        <select id="select-mentee-course">
                             <option name = "courseId"  value="">Select a course</option>
                             <?php displayCourse($conn) ?>
                        </select>
                        <button onclick = 'addMenteeCourse()'> <img src = "../images/add.png"></button>

                       </form>

                        </div>  

<div class ="registration">

                           
<h5>Remove A course you mentor</h5>
<form method = "post">

    <select id="remove-mentor-course">
    <option name = "courseId"  value="">Select a course</option> 
    </select>
    <button onclick = 'removeMentorCourse()'> <img src = "../images/delete.png"></button>

</form>

 

 <h5> Remove A course you are mentored in</h5>

            <form method = "post">


            <select id="remove-mentee-course">
                <option name = "courseId"  value="">select a course</option>
                <?php displayCourseMenteeing($conn,$_SESSION['userId']) ?>
            </select>
            <button onclick = 'removeMenteeCourse()'> <img src = "../images/delete.png"></button>

</form>

</div>  

            </div>


            
          
        </main>



<script src="admin.js"></script>
</body>
</html>
