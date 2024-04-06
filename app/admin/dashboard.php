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


.search-container {
  position: relative;
  display: inline-block;
}

.search-input {
  padding: 10px 20px;
  border: 2px solid #ccc;
  border-radius: 25px;
  font-size: 16px;
  width: 1020px;
  transition: all 0.3s ease;
}

.search-input:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(102, 175, 233, 0.6);
}

.search-button {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  background-color: #007bff;
  border: none;
  border-radius: 25px;
  padding: 8px 15px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-button:hover {
  background-color: #007bff;
}

.search-button i {
  color: white;
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
        <div class="search-container">
        <input type="text" class="search-input" placeholder="Search Mentor or Mentee by course Name...">
        <button class="search-button"><i class="fas fa-search"></i></button>
        </div>

        <main id = "main" class = "main" >

            <h3> Mentor Or Mentee Registration </h3>

            <div class = "registration-container">


                        <div id="registration1" class="registration">
                                    <p> <span>Register</span> Or <span>Withdraw</span> From </p>
                                    <p> Becoming A <span>Mentee</span> Or <span>Mentor</span> </p>
                                    <?php
                                    isMentee($conn,$_SESSION["userId"]);
                                    isMentor($conn,$_SESSION["userId"]);
                                    ?>
                        </div>  

            </div>


            <h3> Mentor Or Mentee Registration of courses </h3>

            <div class = "registration-container">


                        <div id="registration2" class="registration">

                           
                            <h5> Add a course you want to mentor</h5>
                            <button onclick = "yewe()">Add A course</button>

                         

                           <h5> Add a course you want to be mentored</h5>

                        
                            <button onclick = "yewe()">click on me</button>
                          



                        </div>  

            </div>


            <h3> Mentors and Mentees Management </h3>

            <div class ="registration-container">
            


        <div class="options">
            
            <p> Mentors<p>
            
        
        </div>

        <div class="options">
            
            <p> Mentees<p>
            
        
        </div>

        <div class="options">
            
            <p> Pending Request<p>
            
        
        </div>

        <div class="options">
            
            <p> Pending Demand<p>
            
        
        </div>
            

                    
        </main>

</div>


<script src="admin.js"></script>
</body>
</html>
