<?php
function isMentor($conn,$userId){

    $sql = "SELECT * FROM Mentor where userId =$userId";

    $result = $conn->query($sql);

    if($result->num_rows>0){

        echo "<div class='details'>
        <p>Status : Mentor </p>
        <button class='mentor'>Withdraw</button>
 </div> ";

    }

    else{

        echo "<div class='details'>
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
        <p>Status : Mentee</p>
        <button class='mentee'>Withdraw</button>
 </div> ";

    }
    else{


        echo "<div class='details'>
        <p>Status : unregistered </p>
        <button onclick= 'registerMentee($userId)'>register</button>
 </div> ";


    }

}





