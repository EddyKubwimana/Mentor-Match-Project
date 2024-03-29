<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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
            <li><a href="#calendar">Mentor</a></li>
            <li><a href="#me">Meeting</a></li>
            <li><a href="chat.php">Message</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#Logout">Logout</a></li>

        </ul>
    </nav>
</div>

<div class="content">
    <header>
        <h1>Welcome, [Student Name]!</h1>
    </header>
    <main>

    <div class="container">
    <h1>Mentorship</h1>
    <div class="current-mentor">
        <h2>Your existing Mentors</h2>
        <p class="mentor-name">John Doe</p>
        <button id="revokeBtn" onclick="revokeMentorship()">Revoke</button>
    </div>

    <div class="current-mentee">
        <h2>Your existing Mentees</h2>
        <p class="mentor-name">John Doe</p>
        <button id="revokeBtn" onclick="revokeMentorship()">Revoke </button>
    </div>

    <div class="available-mentors">
        <h2>Other mentors you can match with</h2>
        <ul id="mentorsList">
            <li>Jane Smith <button onclick="requestMentorship('Jane Smith')">Request</button></li>
            <li>Mike Johnson <button onclick="requestMentorship('Mike Johnson')">Request</button></li>
        </ul>
    </div>


    <div class="available-mentees">
        <h2>New mentorship Request</h2>
        <ul id="mentorsList">
            <li>Jane Smith <button onclick="requestMentorship('Jane Smith')">Accept</button></li>
            <li>Mike Johnson <button onclick="requestMentorship('Mike Johnson')">Accept</button></li>
        </ul>
    </div>
</div>
        
    </main>
</div>

    </main>
</div>

<footer>
    <p>&copy; 2024 School Name. All rights reserved.</p>
    <nav>
        <ul>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
    </nav>
</footer>

<script src="script.js"></script>
</body>
</html>
