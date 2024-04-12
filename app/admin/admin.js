//function to register as mentor
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


// function to register a mentee
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


// function to management mentee or mentor status
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


// function to add course someone want to mentor
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
            
            
 


// function to add a course someone want to be mentored in

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

// function to remove a course
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


// function to handle search
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("searchInput");
    const searchResults = document.getElementById("searchResults");

    searchInput.addEventListener("input", function() {
        const searchValue = searchInput.value.trim();
        searchResults.innerHTML = "";

        if (searchValue.length === 0)return
        fetch('../action/search.php?query=' + encodeURIComponent(searchValue)) 
            .then(response => response.json())
            .then(data => {

                if (data.length===0){
                    const mentorDiv = document.createElement("div");
                    mentorDiv.classList.add("mentor");
                    mentorDiv.innerHTML ='<h6>No search found that match  "'+searchValue+'", try different key</h6>';
                    searchResults.appendChild(mentorDiv);
                    return 
                }
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

// function to handle mentorship request

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


// function to update mentor status
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

// function to display mentor and option either to withdraw or register for mentorship
function generalOptionMentor(userId){

    var buttonText = document.getElementById("mentorAction")

    var option = buttonText.textContent

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

// function to display mentee and option either to withdraw or register for mentoring 
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
                if(data.length === 0){


                    var overlay = $('<div class="overlay"></div>');
                    var overlayContent = $('<div class="overlay-content"></div>');
                    var message = $('<p> you have no  Mentor, consider requesting  some !</p>');
                    var closeButton = $('<button>Close</button>').click(function() {
                        
                        overlay.remove();})

                        overlayContent.append(message, closeButton);
                        overlay.append(overlayContent);
                        $('body').append(overlay);

                }
                data.forEach(mentor => {
                var mentorCard = '<div class="mentor">';
                mentorCard += '<p><span>Your mentor</span></p>';
                mentorCard += '<p>Name: ' + mentor.firstName + ' ' + mentor.lastName + '</p>';
                mentorCard += '<p>Email: ' + mentor.email + '</p>';
                mentorCard += '<button onclick="suspendMentorship(' + mentor.matchingId + ')">Suspend Mentorship</button>';
                mentorCard += '</div>'; 
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    
    }




function displayPending(){

   

    fetch('../action/display_pending_demand.php') 
            .then(response => response.json())
            .then(data => {

                
                if(data.length === 0){


                    var overlay = $('<div class="overlay"></div>');
                    var overlayContent = $('<div class="overlay-content"></div>');
                    var message = $('<p> No pending demand found !</p>');
                    var closeButton = $('<button>Close</button>').click(function() {
                        
                        overlay.remove();})

                        overlayContent.append(message, closeButton);
                        overlay.append(overlayContent);
                        $('body').append(overlay);

                }
                
                data.forEach(mentor => {
                var mentorCard = '<div class="mentor">';
                mentorCard += '<p><span>Pending demand for Mentorship</span></p>';
                mentorCard += '<p>Name: ' + mentor.firstName + ' ' + mentor.lastName + '</p>';
                mentorCard += '<p>Email: ' + mentor.email + '</p>';
                mentorCard += '<button onclick="suspendMentorship(' + mentor.matchingId+ ')">Withdraw Request</button>';
                mentorCard += '</div>';
                $('#mentorInfo').append(mentorCard); 
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    
    }
function displayMentee() {


    fetch('../action/display_mentees.php') 
            .then(response => response.json())
            .then(data => {

               

                if(data.length === 0){


                    var overlay = $('<div class="overlay"></div>');
                    var overlayContent = $('<div class="overlay-content"></div>');
                    var message = $('<p> you have no  Mentee, consider having some !</p>');
                    var closeButton = $('<button>Close</button>').click(function() {
                        
                        overlay.remove();})

                        overlayContent.append(message, closeButton);
                        overlay.append(overlayContent);
                        $('body').append(overlay);

                }

                
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

    


    


    function displayPendingMentee() {

        fetch('../action/display_pending_request.php') 
                .then(response => response.json())
                .then(data => {

                
                
                    if(data.length === 0){


                        var overlay = $('<div class="overlay"></div>');
                        var overlayContent = $('<div class="overlay-content"></div>');
                        var message = $('<p> No pending Mentee request found !</p>');
                        var closeButton = $('<button>Close</button>').click(function() {
                            
                            overlay.remove();})

                            overlayContent.append(message, closeButton);
                            overlay.append(overlayContent);
                            $('body').append(overlay);

                    }

                    
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
           
            const postData = {
                matchingId: matchingId
            };
        
            
            $.ajax({
                type: "POST",
                url: "../action/accept_mentee.php",
                data: postData,
                dataType: "json",
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
                    console.error("Error:", error);
                    alert("An error occurred while processing the request.");
                }
            });
        }



        function suspendMentee(matchingId) {

            $('#mentorInfo').innerHTML = ""
           
            const postData = {
                matchingId: matchingId
            };


        
            
            $.ajax({
                type: "POST",
                url: "../action/revoke_mentee.php",
                data: postData,
                dataType: "json",
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
                    console.error("Error:", error);
                    alert("An error occurred while processing the request.");
                }
            });
        }



        function suspendMentorship(matchingId) {

           
           
            const postData = {
                matchingId: matchingId
            };


        
            
            $.ajax({
                type: "POST",
                url: "../action/revoke_mentor.php",
                data: postData,
                dataType: "json",
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
                    console.error("Error:", error);
                    alert("An error occurred while processing the request.");
                }
            });
        }
        











  


