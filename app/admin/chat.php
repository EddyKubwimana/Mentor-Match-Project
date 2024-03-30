<?php
include("../setting/core.php");
isLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="sidebar">
    <div class="logo">
        <img src="school_logo.png" alt="School Logo">
    </div>
    <nav>
        <ul>
            <li><a href="#courses">Courses</a></li>
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
    <h1>Welcome, <?php echo $_SESSION['firstName']?> !</h1>
    </header>

    <main> 

    <div class="chat-container">
    <div class="chat">
        <div class="message received">
            <div class="message-content">
                <p>Hello!</p>
                <span class="timestamp">10:00 AM</span>
                <div class="username">Eddy Kubwimana</div>
            </div>
           
        </div>
        <div class="message sent">
            <div class="message-content">
                <p>Hi there!</p>
                <span class="timestamp">10:05 AM</span>
                <div class="username">Eddy Kubwimana</div>
            </div>
        </div>
        <!-- Add more messages here -->
    </div>
    <div class="input-box">
        <textarea placeholder="Type a message..."></textarea>
        <button>Send</button>
    </div>
</div>
    
    
        
    </main>
</div>



</body>
</html>
