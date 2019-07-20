<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Login</title>
<style>
	body{
			color:#111;
			background:#121212;
		}
	.bgimage{
	background-image:url('loginlock.jpg');
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
<br/><br/><br/><br/><br/>
  <div class="header">
  	<h2>Student Login</h2>
  </div>
	 
  <form method="post" action="loginstud.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username1" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password1">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	
  </form>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
</body>
</html>