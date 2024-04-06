<?php
session_start();
function isMentor($conn,$userId){

    $sql = "SELECT * FROM Mentor where userId =$userId";

    $result = $conn->query($sql);

    if($result->num_rows>0){

        echo "<div class='details'>
        p> Mentor </p>
        <p>Status : registered </p>
        <button class='mentor'>Withdraw</button>
 </div> ";

    }

    else{

        echo "<div class='details'>
        <p>Mentor </p>
        <p>Status : unregistered </p>
        <button onclick= 'registerMentor($userId)'>register</button>
 </div> ";


    }
}


function isMentee($conn,$userId){

    $sql = "SELECT * FROM Mentee where userId =$userId";

    $result = $conn->query($sql);

    if($result->num_rows>0){

        echo "<div class='details'>
        <p> Mentee</p>
        <p>Status : registered</p>
        <button class='mentee'>Withdraw</button>
 </div> ";

    }
    else{


        echo "<div class='details'>
        <p> Mentee </p>
        <p>Status : unregistered </p>
        <button onclick= 'registerMentee($userId)'>register</button>
 </div> ";


    }

}


function displayCourse($conn){

$sql = "SELECT * FROM Course"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

       echo '<option name = "courseId"  value=' . $row['courseId'] . '>'.$row['courseName'].'  '.$row['courseLevel'].' </option>';
        
    }
}
}


function displayCourseMentoring($conn,$userId){

    

    $sql = "SELECT Course.courseId, Course.courseName, Course.courseLevel FROM Course  INNER JOIN MentorshipCourseRegistration ON Course.courseId = MentorshipCourseRegistration.CourseId WHERE MentorshipCourseRegistration.mentorId =$userId"; 
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    
           echo '<option name = "courseId"  value=' . $row['courseId'] . '>'.$row['courseName'].'  '.$row['courseLevel'].' </option>';
            
        }
    }

}


function displayCourseMenteeing($conn,$userId){

    

    $sql = "SELECT Course.courseId, Course.courseName, Course.courseLevel FROM Course  INNER JOIN MenteeCourseRegistration ON Course.courseId = MenteeCourseRegistration.CourseId WHERE MenteeCourseRegistration.menteeId =$userId"; 
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    
           echo '<option name = "courseId"  value=' . $row['courseId'] . '>'.$row['courseName'].'  '.$row['courseLevel'].' </option>';
            
        }
    }

}






