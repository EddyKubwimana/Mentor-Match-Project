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

    <div class="flex-container" id="flex1">
    <h2>Flex Container 1</h2>
    <p>This is flex container 1. Click to open div 1.</p>
  </div>
  <div class="flex-container" id="flex2">
    <h2>Flex Container 2</h2>
    <p>This is flex container 2. Click to open div 2.</p>
  </div>

  <div class="hidden" id="div1">
    <h3>Div 1</h3>
    <p>This is the content of div 1.</p>
  </div>
  <div class="hidden" id="div2">
    <h3>Div 2</h3>
    <p>This is the content of div 2.</p>
  </div>
        
    </main>
</div>


<script src="admin.js"></script>
</body>
</html>
