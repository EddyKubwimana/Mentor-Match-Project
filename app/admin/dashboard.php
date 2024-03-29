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
            <li><a href="mentor.php">Mentor</a></li>
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
