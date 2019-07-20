<?php
session_start();

// initializing variables

$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// LOGIN USER
if (isset($_POST['login_admin'])) {
  // receive all input values from the form
  
  $username = mysqli_real_escape_string($db, $_POST['username2']);
  $password = mysqli_real_escape_string($db, $_POST['password2']);
  
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
       echo "no error";
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
	
	if ( false===$results ) {
		echo "chala nahi query";
		printf("error: %s\n", mysqli_error($db));
	}
	else {
		echo 'done.';
	}
	
	if (mysqli_num_rows($results) == 1) {
		echo "chali query";
		session_start();
		$_SESSION['username2'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: homeadmin.php');
	}
    else {
      array_push($errors, "Wrong username/password combination");
    }
 }
}
?>