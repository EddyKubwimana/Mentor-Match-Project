

<?php

include("../../config.php");

$mentors = []; 

// Display mentors
foreach ($mentors as $mentor) {
    echo '<div class="mentor">';
    echo '<h2>' . $mentor['name'] . '</h2>';
    echo '<p>' . $mentor['bio'] . '</p>';
    echo '<button>Request Mentorship</button>';
    echo '<button>View Profile</button>';
    echo '</div>';
}
?>
