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
        <h1>Welcome, <?php echo $_SESSION['firstName']?>!</h1>
    </header>

    <main>
        <section id="courses" class="dashboard-section">
            <!-- Courses Section Content -->
        </section>

        <section id="calendar" class="dashboard-section">
            <!-- Calendar Section Content -->
        </section>

        <section id="grades" class="dashboard-section">
            <!-- Grades Section Content -->
        </section>

        <section id="resources" class="dashboard-section">
            <!-- Resources Section Content -->
        </section>

        <section id="profile" class="dashboard-section">
            <!-- Profile Section Content -->
        </section>
    </main>
</div>


<script src="admin.js"></script>
</body>
</html>
