<?php
include("../setting/core.php");
include("../../config.php");
include("../function/get_your_programs.php");

isLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    justify-content: left; 
    align-items: center; 
}
    #registration1, #registration2,#registration2 {
    min-width: 500px;
    min-height: 300px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
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
    background-color:#007bff

    color: #fff; 
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
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

        <main id = "main" class = "main" >

            <h3> Mentor Or Mentee Registration </h3>

            <div class = "registration-container">


                        <div id="registration1" class="registration">
                                    <p>Register or Check if you are a mentor or Mentee</p>
                                    <?php
                                    isMentee($conn,$_SESSION["userId"]);
                                    isMentor($conn,$_SESSION["userId"]);
                                    ?>







                        </div>  

            </div>


            <h3> Mentor Or Mentee Registration of courses </h3>

            <div class = "registration-container">


                        <div id="registration2" class="registration">
                                    <p>Register or Check if you are a mentor or Mentee</p>
                                    <?php
                                    isMentee($conn,$_SESSION["userId"]);
                                    isMentor($conn,$_SESSION["userId"]);
                                    $conn->close();
                                    ?>







                        </div>  

            </div>


            <h3> Mentors and Mentees Management </h3>

            <div class = "registration-container">


                        <div id="registration2" class="registration">
                                    <p>Register or Check if you are a mentor or Mentee</p>
                                    <?php
                                    isMentee($conn,$_SESSION["userId"]);
                                    isMentor($conn,$_SESSION["userId"]);
                                    $conn->close();
                                    ?>







                        </div>  

            </div>

                  

                    
                    

                    
        </main>

</div>


<script src="admin.js"></script>
</body>
</html>
