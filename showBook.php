<?php

	session_start();

    $db = new mysqli('localhost', 'mx', '', 'test');

    if (mysqli_connect_errno()) {
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }

    $name = $_SESSION['name'];

	$query = "SELECT * from booktable WHERE name = '$name' ";
	$result = $db->query($query);

	if ($result->num_rows>0) {
		$row = $result->fetch_assoc();
		$_SESSION['day'] = $row['day'];
		$_SESSION['doctor'] = $row['doctor'];
		$_SESSION['timing'] = $row['timing'];
	}

    $result->free();
    $db->close();
?>