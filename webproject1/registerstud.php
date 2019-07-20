<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Registration</title>
<style>
	body{
			color:#111;
			background:#121212;
		}
	.bgimage{
	background-image:url('bgreg.jpg');
	background-size: 100% 100%;
	width: 100%;
	height: 100%;
	}
	.div p h3{
		color: black;
	}
	.link{
	color:white;
	}	
</style>
  <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body align="center">
<div class="bgimage">
<br/>
<div class="header">
  	<h2>Student Registration</h2>
  </div>

<form method="post" action="registerstud.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username*</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email*</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	
  	<div class="input-group">
  	  <label>Password*</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password*</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
</form>
<br/><br/><br/><br/>
</div>
</body>
</html>

