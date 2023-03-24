<?php

	session_start();

    $db = new mysqli('localhost', 'mx', 'Testing123', 'u606694035_medical');

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

	$email = $_POST['loginEmail'];
	$password = $_POST['loginPassword'];
	

	$query = "SELECT * from usertable WHERE email = '$email' AND password = '$password' ";
	$result = $db->query($query);


	if ($result->num_rows>0) {
		$row = $result->fetch_assoc();
		$_SESSION['name'] = $row['name'];
		$_SESSION['nric'] = $row['nric'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone'] = $row['phone'];
		echo  "Login Successful!";
		$db->close();
		header("Refresh:1; url=booking.php");
	} else {
		echo "Wrong Loging Details!";
		$db->close();
		header("Refresh:1; url=login.php");
	}
?>