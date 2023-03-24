<?php

	session_start();

    $db = new mysqli('localhost', 'mx', '', 'test');

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

	$to      = 'f38ee@localhost';
	$subject = 'Appointment';
	$message = 'Hello from Modern Medical Care. This is to notify you that your appointment booking is successful.';
	$headers = 'From: f38ee@localhost' . "\r\n" .'Reply-To: f38ee@localhost' . "\r\n" .'X-Mailer: PHP/' . phpversion();

	$name = $_POST['bookName'];
	$nric = $_POST['bookNric'];
	$email = $_POST['bookEmail'];
	$phone = $_POST['bookContact'];
	$day = $_POST['bookDate'];
	$doctor = $_POST['bookDoctor'];
	$timing = $_POST['bookTime'];

	$user_check_query = "SELECT * FROM booktable WHERE day = '$day' AND doctor = '$doctor' AND timing = '$timing' ";
	$checkResult = $db->query($user_check_query);
	$user_check_query2 = "SELECT * FROM booktable WHERE name = '$name' ";
	$checkResult2 = $db->query($user_check_query2);

	if ($checkResult->num_rows>0) {
		echo "That booking has already been booked, please choose another timing";
		$db->close();
		header("Refresh:1; url=booking.php");
	} else if ($checkResult2->num_rows>0) {
		echo "You already have a prior booking. Please reschedule instead.";
		$db->close();
		header("Refresh:1; url=booking.php");
	} else {
	    mail($to, $subject, $message, $headers,'-ff3ee@localhost');
	    $query = "INSERT into booktable (name, nric, email, phone, day, doctor, timing) values ('".$name."', '".$nric."', '".$email."', '".$phone."', '".$day."', '".$doctor."', '".$timing."')";
		$result = $db->query($query);
		echo  "Appointment made successfully. An email notification will be sent to you shortly";
		$db->close();
		header("Refresh:1; url=home2.php");
	}
?>