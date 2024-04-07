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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Register</title>
</head>
<style>


.registrationcontainer {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


form {
    display: flex;
    flex-direction: column;
}

input[type="text"],
input[type="date"],
select,
input[type="password"],
input[type="submit"] {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.signup-link {
    text-align: center;
    margin-top: 10px;
}

.signup-link a {
    color: #007bff;
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}

</style>

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
          
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

          <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">Register Now</a>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
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
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Register</h1>

            </div>
          </div>
        </div>
      </div> 
    </div> 

  </div> 

    <div class="registrationcontainer">
  
          <form  class="registerForm" id = "registrationForm" action="../app/action/register_action.php" method="post">
    
               <input id="firstName" type="text" name="firstname" pattern="[a-zA-Z]+" title="Your name should not have number " placeholder="First name" required>


              <input id = "lastName"  type="text" name="lastname"  pattern="[a-zA-Z]+" title="Your name should not have number "  placeholder="Last Name" required>
              <input id = "email" type="text" name="email" placeholder="Email" required>
              <input   type="text" name="major" placeholder="Major" required>
              <input type="date" id="dob" name="dob" placeholder="Date Of Birth" onchange="validateAge()" required>
      
              <select id="nationality" name="nationality" required>
                  <option value="" disabled selected>Select your nationality</option>
              </select>
              <input id = "password"type="password" name="password" placeholder="Password" required>
              <input id = "confirmpassword" type="password" name="confirmPassword" placeholder="Confirm Password" required>
              <input type="submit" value="Sign Up">
              <div class="signup-link">
                  Do you have account? <a href="login.php">Log In</a>
              </div>
              <div id ="message">
            
              </div>   
              
          </form>
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

  </body>

  <script>
      document.addEventListener("DOMContentLoaded", function() {
       
        fetch("https://restcountries.com/v3.1/all")
        .then(response => response.json())
        .then(data => {
            const nationalitySelect = document.getElementById("nationality");
            data.forEach(country => {
                const option = document.createElement("option");
                option.value = country.name.common;
                option.textContent = country.name.common;
                nationalitySelect.appendChild(option);
            });
        })
        .catch(error => {
            console.error("Error fetching countries:", error);
        });
    });


    
    $("#registrationForm").submit(function(event) {
    event.preventDefault();
    
    var formData = new FormData(this);

    $.ajax({
        url: this.action,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(response) {
            var messageElement = $("#message");
            if (response.status === "success") {
                messageElement.html("<p>You have successfully created an account!</p>").css("color", "blue");
                $("#registrationForm")[0].reset();
            } else {
                messageElement.html("<p>" + response.message + "</p>").css("color", "red");
            }
        },
        error: function(xhr, status, error) {
            $("#message").html("<p>An error occurred, please try again!</p>").css("color", "red");
        }
    });
});

   




function isValidName(name) {
    const nameRegex = /^[a-zA-Z]+(?:[\s'-][a-zA-Z]+)*$/;
    return nameRegex.test(name);
}
function isValidName(name) {
    const nameRegex = /^[a-zA-Z]+(?:[\s'-][a-zA-Z]+)*$/;
    return nameRegex.test(name);
}

function isValidAge(dateOfBirth) {
   
    const dob = new Date(dateOfBirth);
    const currentDate = new Date();
    const ageDifferenceMs = currentDate - dob;

    const age = Math.floor(ageDifferenceMs / (1000 * 60 * 60 * 24 * 365.25));
  
    return age >= 15;
}


function isValidAshesiEmail(email) {
    const regex = /^[a-zA-Z]+\.[a-zA-Z]+@ashesi\.edu\.gh$/;
    return regex.test(email);
}


function validateAge() {
        var dobInput = document.getElementById('dob');
        var dobValue = new Date(dobInput.value);
        var now = new Date();
        var age = now.getFullYear() - dobValue.getFullYear();
        
        if (now.getMonth() < dobValue.getMonth() || (now.getMonth() === dobValue.getMonth() && now.getDate() < dobValue.getDate())) {
            age--;
        }

        if (age < 15) {
            dobInput.setCustomValidity('You must be 15 or older to join.');
        } else {
            dobInput.setCustomValidity('');
        }
    }




</script>

  </html>
