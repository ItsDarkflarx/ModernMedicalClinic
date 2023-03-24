<?php
    
    session_start();

    $db = new mysqli('localhost', 'u606694035_mx', 'Testing123', 'u606694035_medical');

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    $doctor = $_POST['updateDoctor'];
    $day = $_POST['updateDate'];
    $timing = $_POST['updateTime'];
    $name = $_SESSION['name'];

    $user_check_query = "SELECT * FROM booktable WHERE day = '$day' AND doctor = '$doctor' AND timing = '$timing' ";
    $checkResult = $db->query($user_check_query);

    if ($checkResult->num_rows>0) {
        echo "That booking has already been booked, please choose another timing";
        $db->close();
        header("Refresh:1; url=update.php");
    } else {
        $query = "UPDATE booktable SET doctor = '$doctor', day = '$day', timing = '$timing' WHERE name = '$name' ";
        $db->query($query);
        echo  "Reschedule Successful!";
        $db->close();
        header("Refresh:1; url=update.php"); // refresh page
    }
?>