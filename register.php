<?php

    $db = new mysqli('localhost', 'u606694035_mx', 'Testing123', 'u606694035_medical');

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

	$name = $_POST['regisName'];
	$nric = $_POST['regisNric'];
	$email = $_POST['regisEmail'];
	$phone = $_POST['regisContact'];
	$password = $_POST['regisPassword'];

	$errors = array();

	$user_check_query = "SELECT * FROM usertable WHERE nric = '$nric' OR email = '$email' LIMIT 1";

	$checked = mysqli_query($db, $user_check_query);
	$checkResult = mysqli_fetch_assoc($checked);

	if ($checkResult){
		if($checkResult['nric'] === $nric){
			array_push($errors, "NRIC already exists");
		} else if($checkResult['email'] === $email){
			array_push($errors, "This email is already in use");
		}
	}

	if (count($errors) == 0) {
		$query = "INSERT into usertable (name , nric, email, phone, password) values('".$name."', '".$nric."', '".$email."', '".$phone."', '".$password."')";
		$result = $db->query($query);	
		echo  "Registration Completed!";
		$db->close();
		header("Refresh:1; url=login.php");
	} else {
		echo "NRIC or Email has been used for Registration!";
		$db->close();
		header("Refresh:1; url=registration.php");
	}

?>