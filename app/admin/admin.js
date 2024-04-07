
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
               

               
            });
            
            overlayContent.append(errorMessage, closeButton);
            overlay.append(overlayContent);
            $('body').append(overlay);
        }
    });
}


/*$(document).ready(function() {
    $('#registration1').click(function() {
        $.ajax({
            url: '../action/isMentor.php',
            type: 'GET',
            dataType: 'text', 
            success: function(response) {
                
                if (response === "registered") {
                    $('#registration1').html("<p><span>Withdraw</span> From Becoming A <span>Mentor</span></p>");
                } else {
                    $('#registration1').html("<p><span>Register</span> To Become A <span>Mentor</span></p>");
                }
            },
            error: function(xhr, status, error) {
                
                console.error("Ajax request failed:", status, error);
            }
        });
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
    

   $('.mentee').click(function(event)
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


*/

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


function updateStatus() {
    $.ajax({
        url: '../action/isMentor.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.error) {
                console.log(response.error);
                return;
            }
            const mentorStatus = response.mentorStatus.trim().toLowerCase(); // Trim whitespace and convert to lowercase
            const menteeStatus = response.menteeStatus.trim().toLowerCase();
            const mentorAction = response.mentorAction.trim().toLowerCase(); 
            const menteeAction = response.menteeAction.trim().toLowerCase(); 
            

            $('#mentorStatus').text(mentorStatus);
            $('#menteeStatus').text(menteeStatus);
            $('#mentorAction').text( mentorAction);
            $('#menteeAction').text(menteeAction);

            
        },
        error: function(xhr, status, error) {
            console.error("Ajax request failed:", status, error);
        }
    });
}



$(document).ready(function() {
   
    updateStatus();

  
    $("#updateStatusButton").click(function() {
        updateStatus();
    });
});


function generalOptionMentor(userId){

    var buttonText = document.getElementById("mentorAction")

    var option = buttonText.textContent

    console.log(buttonText);
    console.log(option);

    if(option==="withdraw"){

        $.ajax({
            url: '../action/unregister_mentor.php',
            type: 'POST',
            dataType: 'json',
            data: { userType: userId }, 
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
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + error);
            }
        });

       
    }else{

        registerMentor(userId);


    }


}


function generalOptionMentee(userId){

    var buttonText = document.getElementById("menteeAction")

    var option = buttonText.textContent

    console.log(buttonText);
    console.log(option);

    if(option==="withdraw"){

        $.ajax({
            url: '../action/unregister_mentee.php',
            type: 'POST',
            dataType: 'json',
            data: { userType: userId }, 
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
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + error);
            }
        });
   
    }else{

        registerMentee(userId);


    }


}


$(document).ready(function() {

    $('#remove-mentor-course').click(function(){




    $.ajax({
        url: '../action/display_mentoring_course.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            response.forEach(function(course) {
                $('#remove-mentor-course').append('<option  value="' + course.courseId + '">' + course.courseName + ' ' + course.courseLevel + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error("Ajax request failed:", status, error);
        }
    });

});
})
'../action/display_mentors.php'

function displayMentor() {

    fetch('../action/display_mentors.php') 
            .then(response => response.json())
            .then(data => {
                data.forEach(mentor => {
                var mentorCard = '<div class="mentor">';
                mentorCard += '<p><span>Your mentor</span></p>';
                mentorCard += '<p>Name: ' + mentor.firstName + ' ' + mentor.lastName + '</p>';
                mentorCard += '<p>Email: ' + mentor.email + '</p>';
                mentorCard += '<button onclick="suspendMentorship(' + mentor.matchingId + ')">Suspend Mentorship</button>';
                mentorCard += '</div>';
                $('#mentorInfo').append(mentorCard); 
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    
    }



    


function suspendMentorship(mentorId) {
    console.log('Suspend mentorship for mentor ID: ' + mentorId);
}


function displayPending(){

    fetch('../action/display_pending_demand.php') 
            .then(response => response.json())
            .then(data => {
                data.forEach(mentor => {
                var mentorCard = '<div class="mentor">';
                mentorCard += '<p><span>Pending Demand Of Mentorship</span></p>';
                mentorCard += '<p>Name: ' + mentor.firstName + ' ' + mentor.lastName + '</p>';
                mentorCard += '<p>Email: ' + mentor.email + '</p>';
                mentorCard += '<button onclick="suspendMentorship(' + mentor.matchingId+ ')">Suspend Mentorship</button>';
                mentorCard += '</div>';
                $('#mentorInfo').append(mentorCard); 
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    
    }

function suspendMentorship(mentorId) {
    console.log('Suspend mentorship for mentor ID: ' + mentorId);
}


function displayMentee() {

    fetch('../action/display_mentees.php') 
            .then(response => response.json())
            .then(data => {
                data.forEach(mentor => {
                var mentorCard = '<div class="mentor">';
                mentorCard += '<p><span>Your mentee</span></p>';
                mentorCard += '<p>Name: ' + mentor.firstName + ' ' + mentor.lastName + '</p>';
                mentorCard += '<p>Email: ' + mentor.email + '</p>';
                mentorCard += '<button onclick="suspendMentee(' + mentor.matchingId + ')">Suspend Mentorship</button>';
                mentorCard += '</div>';
                $('#mentorInfo').append(mentorCard); 
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    
    }

    function suspendMentee(matchingId) {
        console.log('Suspend mentorship for mentor ID: ' + matchingId);
    }



    function displayPendingMentee() {

        fetch('../action/display_pending_request.php') 
                .then(response => response.json())
                .then(data => {
                    data.forEach(mentor => {
                    var mentorCard = '<div class="mentor">';
                    mentorCard += '<p><span>Pending Request Of Mentorship</span></p>';
                    mentorCard += '<p>Name: ' + mentor.firstName + ' ' + mentor.lastName + '</p>';
                    mentorCard += '<p>Email: ' + mentor.email + '</p>';
                    mentorCard += '<button onclick="AcceptMentorship(' + mentor.matchingId + ')">Accept</button>';
                    mentorCard += '</div>';
                    $('#mentorInfo').append(mentorCard); 
                    });
                })
                .catch(error => console.error("Error fetching data:", error));
        
        }

    function AcceptMentorship(matchingId) {
            console.log('Suspend mentorship for mentor ID: ' + matchingId);
        }














  


