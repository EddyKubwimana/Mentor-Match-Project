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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">


    <style>
      @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");

#chat-container {
  max-width: 400px;
  margin: 50px auto;
}

#chat {
  background-color: #f5f5f5;
  border-radius: 10px;
  overflow: hidden;
}

.message {
  padding: 10px 20px;
  margin: 10px;
  border-radius: 10px;
  max-width: 400px;
  background-color: #e2e2e2;
  word-wrap: break-word;
}

.time {
  font-size: 12px;
  color: #666;
}

.message p {
  margin: 0;
  font-size: 14px;
  line-height: 1.5;
}

.message-input {
  display: flex;
  align-items: center;
  background-color: #fff;
  padding: 10px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

textarea {
  flex: 1;
  border: none;
  outline: none;
  resize: none;
  padding: 10px;
  border-radius: 5px;
  font-size: 14px;
  margin-right: 10px;
}

button {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.message-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  .message-form label {
    font-weight: bold;
  }
  .message-form textarea {
    width: 100%;
    height: 100px;
    resize: none;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  .message-form select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
  }
  .message-form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .message-form button:hover {
    background-color: #0056b3;
  }


    </style>
</head>
<body>




<div class="sidebar">
            <a class = "option"><img src = "../images/option.png"></a>
            <nav>
                        <ul>
                            <li><a href="../../index.php"><img src = "../images/home.png">Home</a></li>
                            <li><a href="dashboard.php"><img src = "../images/dasboard.png">dashboard</a></li>
                            <li><a href="chat.php"><img src = "../images/inbox.png">Message</a></li>
                            <li><a href="profile.php"><img src = "../images/account.png">Profile</a></li>
                            <li><a href="../action/logout_action.php"><img src = "../images/logout.png">Logout</a></li>

                        </ul>
            </nav>
               
</div>

<div class="content">
    <header>
    <h1>Welcome to your Chat <?php echo $_SESSION['firstName']?> !</h1>
    </header>

    <main> 

  <div class="message-form" id = "message-form">
  <label for="user-search">Select User to a new user:</label>
  <select id="user-search">
  </select>
  <label for="message">Message:</label>
  <textarea id="message" placeholder="Type your message here..."></textarea>
  <button onclick="send()">Send Message</button>
</div>

    <div id="chat-container">
    <div id ="chat">
    </div>
  </div>

    <div id = "contacts">
  
    
    
    </div>
    
    
        
    </main>
</div>

<script>

document.addEventListener("DOMContentLoaded", function() {
            const messages = document.getElementById("contacts");
        
    
                fetch('../action/inbox_action.php') 
                    .then(response => response.json())
                    .then(data => {
        
                        if (data.length===0){
                            const mentorDiv = document.createElement("div");
                            mentorDiv.classList.add("mentor");
        
                            mentorDiv.appendChild(img);
                            mentorDiv.innerHTML ='<h6>No message yet</h6>';
                            
                            searchResults.appendChild(mentorDiv);
                            return 
                        }
                
                        data.forEach(message => {
                            const mentorDiv = document.createElement("div");
                            mentorDiv.classList.add("mentor");
                            mentorDiv.innerHTML = `<img onclick="openchat('${message.userId}')" src ='../images/message.png'>
                                <h3 onclick="openchat('${message.userId}')">${message.firstName} ${message.lastName}</h3>
                            `;
                            messages.appendChild(mentorDiv);
                        });
                    })
                    .catch(error => console.error("Error fetching data:", error));
            });


    function openchat(friendId){

        


        const messages = document.getElementById("chat");
        while (messages.firstChild) {
           messages.removeChild(messages.firstChild);
           }
    
        fetch('../action/detailed_inbox.php?friendId='+friendId) 
                    .then(response => response.json())
                    .then(data => {
        
                        if (data.length===0){
                            const mentorDiv = document.createElement("div");
                            mentorDiv.classList.add("mentor");
        
        
                            mentorDiv.innerHTML ='<h6>No message yet</h6>';
                            
                            searchResults.appendChild(mentorDiv);
                            return 
                        }
                    
                        data.forEach(message => {
                            const mentorDiv = document.createElement("div");
                            mentorDiv.classList.add("message");
                            mentorDiv.innerHTML = `
                            <p>${message.message}</p>
                            <span class="time">${message.messageTimestamp}</span>
                            <span class = "username">${message.senderFirstName}</span>
                            `;
                            messages.appendChild(mentorDiv);
                        });


                        const sendMessage = document.createElement("div");

                        sendMessage.classList.add("message-input");
                        sendMessage.innerHTML= `<textarea  id = "ubutumwa" placeholder="Type your message here..."></textarea>
                       <button onclick = "sendMessage(${friendId})"><img src='../images/send.png' alt="Send"></button>`


                       messages.appendChild(sendMessage);
    

                    })
                    .catch(error => console.error("Error fetching data:", error));


    }


    function sendMessage(friendId){

      const chat = document.getElementById("chat");
      let messages = document.getElementById("ubutumwa")
    
       if(messages.value===null){

                var overlay = $('<div class="overlay"></div>');
                var overlayContent = $('<div class="overlay-content"></div>');
                var message = $('<p>You cannot send an empty message !</p>')
                var closeButton = $('<button>Close</button>').click(function() {
                    overlay.remove();
                   
                });
                
                overlayContent.append(message, closeButton);
                overlay.append(overlayContent);
                $('body').append(overlay);

                return;


       }else{


        $.ajax({
        url: '../action/send_message.php',
        type: 'POST',
        data: {friendId: friendId, message : messages.value},
        dataType: 'json',
    
        success: function(response) {
       
                var overlay = $('<div class="overlay"></div>');
                var overlayContent = $('<div class="overlay-content"></div>');
                var message = $('<p></p>').text(response.message);
                var closeButton = $('<button>Close</button>').click(function() {
                    overlay.remove();
                   
                });
                
                overlayContent.append(message, closeButton);
                overlay.append(overlayContent);
                $('body').append(overlay);
            },
        })


        openchat(friendId);

      



       }

       


  

    }


    function populateUsers() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var users = JSON.parse(xhr.responseText);
          console.log(users);

          var select = document.getElementById("user-search");
          users.forEach(function(user) {
            var option = document.createElement("option");
            option.value = user.userId;
            option.textContent = user.firstName + " " + user.lastName;
            select.appendChild(option);
          });
        } else {
          console.error("Failed to fetch user data");
        }
      }
    };
    xhr.open("GET", "../action/get_all_user.php", true);
    xhr.send();
  }


  function send() {
    var recipient = document.getElementById("user-search").value;
    var messages = document.getElementById("message").value;

    $.ajax({
        url: '../action/new_message.php',
        type: 'POST',
        data: {friendId: recipient, message : messages},
        dataType: 'json',
    
        success: function(response) {
       
                var overlay = $('<div class="overlay"></div>');
                var overlayContent = $('<div class="overlay-content"></div>');
                var message = $('<p></p>').text(response.message);
                var closeButton = $('<button>Close</button>').click(function() {
                    overlay.remove();
                   
                });
                
                overlayContent.append(message, closeButton);
                overlay.append(overlayContent);
                $('body').append(overlay);
            },
        })

  }

  populateUsers()


</script>



<script src="admin.js"></script>
</body>
</html>
