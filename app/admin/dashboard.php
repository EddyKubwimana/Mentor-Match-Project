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
    <style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
.registration-container {
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: center; 
    align-items: center; 
}
    #registration1, #registration2,#registration2, .registration {
    min-width: 500px;
    min-height: 300px;
    margin-left : 10px;
    margin-right : 10px
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center; 
}

.options{

    min-width: 400px;
    min-height: 100px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    flex-direction: column;
    justify-content: center; 
    align-items: center; 
}


.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    display: flex;
    justify-content: center; 
    align-items: center; 
    z-index: 999; 
}

.overlay-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
}

.overlay-content p {
    margin-bottom: 10px;
}

.overlay-content button {
    background-color:#007bff;
    color: #fff; 
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.option-group {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

.option-group label {
            display: block;
            margin: 0 10px;
        }

#Button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

button:hover {
            background-color: #0056b3;
        }


.overlay-content button:hover {
    background-color: #007bff;
}

.details {
    display: none;
    margin-top: 5px;
}

.details p {
    margin: 5px 0;
}

span{

    color: #007bff;

}

.mentor-status {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    width: 200px;
}

.mentor-status p {
    margin: 0 0 10px;
}

.mentor-status button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 3px;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.mentor-status button:hover {
    background-color: #007bff;
}


.container-search {
    min-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
}

#searchResults {
    margin-top: 20px;
}

.mentor {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
}

.mentor button {
    padding-top: 10px
    float: right;
}

.search-input {
  padding: 10px 20px;
  border: 2px solid #ccc;
  border-radius: 25px;
  font-size: 16px;
  min-width: 1028px;
  transition: all 0.3s ease;
}

.search-input:focus {
  outline: none;
  border-color: #66afe9;
  box-shadow: 0 0 5px rgba(102, 175, 233, 0.6);
}

#mentorInfo{

    margin-top: 20px;
}



    </style>
</head>
<body>

<div class="sidebar">
            <a class = "option"><img src = "../images/option.png"></a>
            <nav>
                        <ul>
                            <li><a href="../../index.php">Home</a></li>
                            <li><a href="dashboard.php">Course</a></li>
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


    <div class="container-search">
        <input type="text" id="searchInput"  class = "search-input" placeholder="Search a mentor .">
        <div id="searchResults"></div>
    </div>

                    
        

        <main id = "main" class = "main" >

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
          
        </main>

</div>


<div class ="registration-container">

    <div id="mentorInfo">


    </div>

</div>



<script src="admin.js"></script>
</body>
</html>
