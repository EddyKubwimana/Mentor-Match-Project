window.onload = function() {
   
    populateCourses();
};

function populateCourses() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_course.php', true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            var courses = JSON.parse(xhr.responseText);
            var courseDropdown = document.getElementById('course');
            courses.forEach(function(course) {
                var option = document.createElement('option');
                option.text = course;
                option.value = course;
                courseDropdown.add(option);
            });
        } else {
            console.error('Request failed with status:', xhr.status);
        }
    };
    xhr.send();
}

function searchMentors() {
    var course = document.getElementById('course').value;
    var major = document.getElementById('major').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'search-mentors.php?course=' + course + '&major=' + major, true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            var mentorResults = document.getElementById('mentorResults');
            mentorResults.innerHTML = xhr.responseText;
        } else {
            console.error('Request failed with status:', xhr.status);
        }
    };
    xhr.send();
}
