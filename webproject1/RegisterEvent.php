<?php include('serverRegEvents.php') ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Event Registration</title>
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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body align="center">
<div class="bgimage">
<br/>
<div class="header">
  	<h2>Event Registration</h2>
  </div>

<form method="post" action="RegisterEvent.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Event ID*</label>
  	  <input type="text" name="eventid" value="">
  	</div>
	
  	<div class="input-group">
  	  <label>Contestant Name*</label>
  	  <input type="text" name="name" value="">
  	</div>
  	
  	<div class="input-group">
  	  <label>Semester*</label>
	</div>
	
	  <div class="input-group">
			<select name="semester">
				<option value="semester">Semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
	</div>
  	
	
  	<div class="input-group">
  	  <label>Branch*</label>
  	  <select name="branch">
	  <option value="branch">Branch</option>
	  <option value="cse">CSE</option>
	  <option value="ece">ECE</option>
	  <option value="civ">CIV</option>
	  <option value="me">ME</option>
	  </select>
  	</div>
	
	<div class="input-group">
  	  <label>USN*</label>
  	  <input type="text" name="usn">
  	</div>
	
	<div class="input-group">
  	  <label>Mobile No.*</label>
	  <input type="text" name="mob">
	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="regevents">Register</button>
  	</div>

</form>
<br/><br/><br/>
</div>
</body>
</html>

