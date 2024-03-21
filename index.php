<?php
include('config.php')?

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor-Mentee Match</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add any necessary JavaScript libraries -->
  <style>

    /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: #f7f7f7;
    padding: 20px 0;
}

.nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-links li {
    display: inline;
    margin-right: 20px;
}

.hero {
    background-image: url('hero-background.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0;
    text-align: center;
}

.hero h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

.btn {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.features {
    padding: 100px 0;
    background-color: #f9f9f9;
}

.features h2 {
    text-align: center;
}

.feature-box {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 40px;
}

.feature-img {
    flex: 1;
    text-align: center;
}

.feature-img img {
    width: 100px;
}

.feature-text {
    flex: 3;
    padding: 0 20px;
}

.footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    display: inline;
    margin-right: 20px;
}

.footer-logo {
    font-size: 1.5em;
    margin-bottom: 20px;
}

.rotate {
    animation: rotate 2s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}



    
  </style>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">Mentor-Mentee Match</div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero">
            <div class="container">
                <h1>Find Your Perfect Mentor or Mentee</h1>
                <p>Connect with experienced mentors or eager mentees in your field.</p>
                <a href="#" class="btn">Get Started</a>
            </div>
        </div>
    </header>

    <section class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="feature-box">
                <div class="feature-img">
                    <img src="mentor-icon.png" alt="Mentor" class="rotate">
                </div>
                <div class="feature-text">
                    <h3>Expert Mentors</h3>
                    <p>Access to a diverse range of experienced mentors from various industries.</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-img">
                    <img src="mentee-icon.png" alt="Mentee" class="rotate">
                </div>
                <div class="feature-text">
                    <h3>Eager Mentees</h3>
                    <p>Connect with enthusiastic mentees who are eager to learn and grow.</p>
                </div>
            </div>
            <div class="feature-box">
                <div class="feature-img">
                    <img src="community-icon.png" alt="Community" class="rotate">
                </div>
                <div class="feature-text">
                    <h3>Supportive Community</h3>
                    <p>Join a supportive community of mentors and mentees helping each other succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <section>

    <table>

     <tr>
         <td>User ID</td>
         <td> First Name</td>
         <td> Last Name</td>  
     </tr>
    <?php
    
    $query = "SELECT * FROM Users";
    $result = $conn->query($query);
    while($row = $result->fetch_assoc()){

        <td>{$row['user_id']}</td>
        <td>{$row['first_name']}</td>
        <td>{$row['last_name']}</td>
    }

    $conn->close()

    ?>
     </table>
        
    </section>

    <footer>
        <div class="container">
            <div class="footer-logo">Mentor-Mentee Match</div>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p>&copy; 2024 Mentor-Mentee Match. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script> <!-- Add any necessary JavaScript -->
</body>
</html>
