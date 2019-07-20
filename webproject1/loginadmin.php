<?php include('serveradmin.php') ?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
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
  	<h2>Admin Login</h2>
  </div>
	 
  <form method="post" action="loginadmin.php">
  	<?php include('errorsadmin.php'); ?> 
  	<div class="input-group">
  		<label>Admin-Username</label>
  		<input type="text" name="username2" >
  	</div>
  	<div class="input-group">
  		<label>Admin-Password</label>
  		<input type="password" name="password2">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_admin">Login</button>
  	</div>
  	
  </form>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>
</body>
</html>