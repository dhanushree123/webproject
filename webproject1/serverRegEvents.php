<?php
session_start();

// initializing variables

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
if(!$db){
    die("Database connection failed");
    }

// REGISTER USER
if (isset($_POST['regevents'])) {
  // receive all input values from the form
  
  $eventid = mysqli_real_escape_string($db, $_POST['eventid']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $semester = mysqli_real_escape_string($db, $_POST['semester']);
  $branch = mysqli_real_escape_string($db, $_POST['branch']);
  $usn = mysqli_real_escape_string($db, $_POST['usn']);
  $mob = mysqli_real_escape_string($db, $_POST['mob']);
  
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($eventid)) { array_push($errors, "Event ID is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($semester)) { array_push($errors, "Semester is required"); }
  if (empty($branch)) { array_push($errors, "Branch is required"); }
  if (empty($usn)) { array_push($errors, "USN is required"); }
  if (empty($mob)) { array_push($errors, "Mobile No. is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same usn
  $user_check_query = "SELECT * FROM reg_events WHERE usn='$usn' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if usn exists
    if ($user['usn'] === $usn) {
      array_push($errors, "USN already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO reg_events (eventid, name, semester, branch, usn, mobile) 
  			  VALUES ('$eventid', '$name','$semester', '$branch', '$usn', '$mob')";
			  
	# echo $query
	
  	$temp=mysqli_query($db, $query);
	
	if ( false===$temp ) {
		echo "chala nahi query";
		printf("error: %s\n", mysqli_error($db));
	}
	else {
		echo 'done.';
	}
	
	if ( $temp ) {
		echo "chali query";
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: thankyoureg.php');
	}
  }
}

?>