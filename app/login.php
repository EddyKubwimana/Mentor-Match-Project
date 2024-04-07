<?php
include("../setting/core.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Login</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  
  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

         <div class="col-6 col-lg-9">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a> 
            <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">+233 599 346 549</span></a> 
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">eddy.kubwimana@ashesi.edu.gh</span></a> 
          </div>

          <div class="col-6 col-lg-3 text-right">
            <a href="login.php" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="register.php" class="small">
              <span class="icon-person"></span>
              Register
            </a>
          </div>

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.html" class="logo menu-absolute m-0">Mentor Match<span class="text-primary">.</span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="admin/dashboard.php">Dashboard</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span>Hello</span>
          </a>

        </div>
      </div>
    </div>
  </nav>
  

  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Login</h1>

            </div>
          </div>
        </div>
      </div> 
    </div> 

  </div> 




  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">

      <div class="login-container">
    <h2>Login</h2>
    <form id="login-form" class="login-form" method="post">
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login In">
        <div class="signup-link">
            Don't have an account? <a href="register.php">Sign up</a>
        </div>
        <div id="message"></div>
  </form>

</div>

      
       
      




    </div></div>
    </div>
  </div> 

  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>We all need coach. Learning is a tough and tiring job. Mentor Match is here to make the journey of learning a collective one</p>
          </div> 
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> 
        </div> 

      

        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>University Avenue, Ashesi University</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://233599346549">+233 599 346 549</a></li>
              <li><a href="mailto:info@mydomain.com">eddy.kubwimana@ashesi.edu.gh</a></li>
            </ul>
          </div> 
        </div> 

      </div> 

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.
        </div>
      </div> 
    </div> 

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>

    <script>

function onsubmit(event) {
    event.preventDefault();

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../app/action/login_action.php", true); 
    xhr.setRequestHeader("Accept", "application/json");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status >= 200 && xhr.status < 300) {
                document.getElementById("login-form").reset(); 

               window.location.href = "admin/dashboard.php";
                
            } else if (xhr.status == 402) {
                var message = document.getElementById("message");
                message.innerHTML = "<p> Password is wrong !</p>";
                message.style.color = "red";
            } else {
                var message = document.getElementById("message");
                message.innerHTML = "<p>Your Email does not have an account !</p>";
                message.style.color = "red";
            }
        }
    };

    xhr.send(formData);
}

document.getElementById("login-form").addEventListener("submit", onsubmit);



  </script>

  </body>


  </html>
