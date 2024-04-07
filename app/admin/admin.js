
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


document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const searchResults = document.getElementById("searchResults");

    searchInput.addEventListener("input", function() {
        const searchValue = searchInput.value.trim();
        searchResults.innerHTML = "";

        if (searchValue.length === 0) return;

        // Send search input value to the backend for filtering
        fetch('../action/search.php?query=' + encodeURIComponent(searchValue)) // Encode the search value
            .then(response => response.json())
            .then(data => {
                data.forEach(mentor => {
                    const mentorDiv = document.createElement("div");
                    mentorDiv.classList.add("mentor");
                    mentorDiv.innerHTML = `
                        <h3>${mentor.firstName} ${mentor.lastName}</h3>
                        <p>Email: ${mentor.email}</p>
                        <p>Course: ${mentor.courseName}</p>
                        <p>Role: ${mentor.role}</p>
                        <button onclick="requestMentor('${mentor.userId}')">Request Mentorship</button>
                    `;
                    searchResults.appendChild(mentorDiv);
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    });
});

function requestMentor(mentorId) {
   
    $.ajax({
        url: '../action/request_mentorship.php',
        type: 'POST',
        dataType: 'json',
        data: { mentorId: mentorId },
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
        error:function(response) {
           
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
    });
}


















  


