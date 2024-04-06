
function registerMentor(userId) {
    $.ajax({
        url: '../action/register_mentor.php',
        type: 'POST',
        dataType: 'json',
        data: {userId: userId},
        success: function(response) {
            
            var overlay = $('<div class="overlay"></div>');
            var overlayContent = $('<div class="overlay-content"></div>');
            var message = $('<p></p>').text(response.message);
            var closeButton = $('<button>Close</button>').click(function() {
                overlay.remove();
                window.location.href = "dashboard.php";
                
            });
            
            overlayContent.append(message, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        },
        error: function(xhr, status, error) {
           
            var overlay = $('<div class="overlay"></div>');
            var overlayContent = $('<div class="overlay-content"></div>');
            var errorMessage = $('<p></p>').text('AJAX Error: ' + error);
            var closeButton = $('<button>Close</button>').click(function() {
                overlay.remove();
                window.location.href = "dashboard.php";
               
            });
            
            overlayContent.append(errorMessage, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        }
    });
}



function registerMentee(userId) {
    $.ajax({
        url: '../action/register_mentee.php',
        type: 'POST',
        dataType: 'json',
        data: {userId: userId},
        success: function(response) {
           
            var overlay = $('<div class="overlay"></div>');
            var overlayContent = $('<div class="overlay-content"></div>');
            var message = $('<p></p>').text(response.message);
            var closeButton = $('<button>Close</button>').click(function() {
                overlay.remove();
                window.location.href = "dashboard.php";
               
            });
            
            overlayContent.append(message, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        },
        error: function(xhr, status, error) {
      
            var overlay = $('<div class="overlay"></div>');
            var overlayContent = $('<div class="overlay-content"></div>');
            var errorMessage = $('<p></p>').text('AJAX Error: ' + error);
            var closeButton = $('<button>Close</button>').click(function() {
                overlay.remove();
                window.location.href = "dashboard.php";
                
            });
            
            overlayContent.append(errorMessage, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        }
    });
}


function displayMentorshipRegistration(){


}



function mentorshipManagement(userId) {
    $.ajax({
        url: '../action/mentorship_management.php',
        type: 'POST',
        dataType: 'json',
        data: {userId: userId},
        success: function(response) {
           
            var overlay = $('<div class="overlay"></div>');
            var overlayContent = $('<div class="overlay-content"></div>');
            var message = $('<p></p>').text(response.message);
            var closeButton = $('<button>Close</button>').click(function() {
                overlay.remove();
                window.location.href = "dashboard.php";
               
            });
            
            overlayContent.append(message, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        },
        error: function(xhr, status, error) {
      
            var overlay = $('<div class="overlay"></div>');
            var overlayContent = $('<div class="overlay-content"></div>');
            var errorMessage = $('<p></p>').text('AJAX Error: ' + error);
            var closeButton = $('<button>Close</button>').click(function() {
                overlay.remove();
                window.location.href = "dashboard.php";

               
            });
            
            overlayContent.append(errorMessage, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        }
    });
}


$(document).ready(function() {
    $('#registration1').click(function() {
        $(this).find('.details').slideToggle();
    });

    $('.mentor').click(function(event) {
        event.stopPropagation(); // Prevent the click event from bubbling up to the parent div
        
        // Get the user type (mentor or mentee)
        var userType = $(this).siblings('p').text();
        
        // Send AJAX request to unregister.php
        $.ajax({
            url: '../action/unregister_mentor.php',
            type: 'POST',
            dataType: 'json',
            data: { userType: userType }, // Send the user type to the PHP script
            success: function(response) {
                // Display the overlay with the response message
                var overlay = $('<div class="overlay"></div>');
                var overlayContent = $('<div class="overlay-content"></div>');
                var message = $('<p></p>').text(response.message);
                var closeButton = $('<button>Close</button>').click(function() {
                    overlay.remove();
                    window.location.href = "dashboard.php";
                    
                });

                overlayContent.append(message, closeButton);
                overlay.append(overlayContent);
                $('body').append(overlay);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + error);
            }
        });
    });
    

    $('.mentee').click(function(event) {
        event.stopPropagation(); // Prevent the click event from bubbling up to the parent div
        
        // Get the user type (mentor or mentee)
        var userType = $(this).siblings('p').text();
        
        // Send AJAX request to unregister.php
        $.ajax({
            url: '../action/unregister_mentee.php',
            type: 'POST',
            dataType: 'json',
            data: { userType: userType }, // Send the user type to the PHP script
            success: function(response) {
                // Display the overlay with the response message
                var overlay = $('<div class="overlay"></div>');
                var overlayContent = $('<div class="overlay-content"></div>');
                var message = $('<p></p>').text(response.message);
                var closeButton = $('<button>Close</button>').click(function() {
                    
                    overlay.remove();
                    window.location.href = "dashboard.php";
                    
                });

                overlayContent.append(message, closeButton);
                overlay.append(overlayContent);
                $('body').append(overlay);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + error);
            }
        });
    });
});



function yewe(){

    alert("Uramfyonze !")
};




  


