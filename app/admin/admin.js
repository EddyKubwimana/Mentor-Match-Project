
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
        event.stopPropagation(); 
       
        var userType = $(this).siblings('p').text();
        
        
        $.ajax({
            url: '../action/unregister_mentor.php',
            type: 'POST',
            dataType: 'json',
            data: { userType: userType }, 
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
                console.error("AJAX Error: " + error);
            }
        });
    });
    

    $('.mentee').click(function(event) {
        event.stopPropagation(); 
      
        var userType = $(this).siblings('p').text();
        
        
        $.ajax({
            url: '../action/unregister_mentee.php',
            type: 'POST',
            dataType: 'json',
            data: { userType: userType }, 
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
                console.error("AJAX Error: " + error);
            }
        });
    });
});


       
function addMentorCourse(){

    event.preventDefault();

    
    var courseId = document.getElementById('select-mentor-course').value;


    $.ajax({
            url: '../action/register_course_mentor.php',
            type: 'POST',
            data: {courseId: courseId},
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
            
            
 


function addMenteeCourse(){

    event.preventDefault();

    
    var courseId = document.getElementById('select-mentee-course').value;

        $.ajax({
            url: '../action/register_course_mentee.php',
            type: 'POST',
            data: {courseId: courseId},
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



function removeMenteeCourse(){

    event.preventDefault();

    
    var courseId = document.getElementById('remove-mentee-course').value;

        $.ajax({
            url: '../action/remove_course_mentee.php',
            type: 'POST',
            data: {courseId: courseId},
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


function removeMentorCourse(){

    event.preventDefault();

    
    var courseId = document.getElementById('remove-mentor-course').value;

        $.ajax({
            url: '../action/remove_ course_mentor.php',
            type: 'POST',
            data: {courseId: courseId},
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

















  


