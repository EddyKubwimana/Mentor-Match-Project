
function registerMentor(userId) {
    $.ajax({
        url: '../action/register_mentor.php',
        type: 'POST',
        dataType: 'json',
        data: {userId: userId},
        success: function(response) {
            if (response.status === 'success') {
                // Handle success response
                console.log(response.message);
            } else {
                // Handle error response
                console.error(response.message);
            }
        },
        error: function(xhr, status, error) {
            // Handle AJAX error
            console.error("AJAX Error: " + error);
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
            if (response.status === 'success') {
                // Handle success response
                console.log(response.message);
            } else {
                // Handle error response
                console.error(response.message);
            }
        },
        error: function(xhr, status, error) {
            // Handle AJAX error
            console.error("AJAX Error: " + error);
        }
    });
}


  


