<?php
	// 1. Create a database connection
	require_once("config.php");

	// Usually this data would come from HTML form values in $_POST
	$firstname = Trim(stripslashes($_POST['firstname'])); 
	$lastname = Trim(stripslashes($_POST['lastname'])); 
	$email = Trim(stripslashes($_POST['email'])); 
		// Repeat the above line as needed
	
	// You really should escape all strings
	//$insertData = mysqli_real_escape_string($connection, $insertData);
		// Repeat the above line as needed
	
	// 2. Perform database query
	$query  = "INSERT INTO members (firstname, lastname, email) VALUES ('$firstname','$lastname','$email')";
	$result = mysqli_query($connection, $query);
	if ($result) {
		header("Location: about.php"); /* Redirect browser */
  	exit();
	} else {
		die("Database query failed.");
	}
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);
    mysqli_free_result($result);
	// 5. Close database connection
	mysqli_close($connection);
?>