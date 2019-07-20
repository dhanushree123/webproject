<?php
	$db = mysqli_connect('localhost', 'root', '', 'registration');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registrations Till Date</title>
<style>
	body{
			color:#111;
			background:#121212;
		}
	.bgimage{
	background-image:url('viewreg.jpg');
	background-size: 100% 100%;
	width: cover;
	height: 100%;
	}
	.div p h3{
		color: black;
	}
	ul{
		list-style-type: none;
		margin:0px;padding:0px;
	}
	ul li{
		float:left;
		width:180px;
		height:40px;
		#background-color:black;
		font-size:20px;
		line-height:40px;
		text-align:center;
		opacity:0.8;
	}
	ul li a{
		text-decoration:none;
		color:black;
		display:block;
	}
	ul li a:hover{
			background-color:#C0C0C0;
	}
	ul li ul li{
		display:none;
	}
	ul li:hover ul li{
		display:block;
	}
		
	</style>
</head>
<body>
<div class="bgimage">
<marquee direction="right"><h1><u>Registrations Till Date...</u></h1></marquee>

<div>
			<ul>
				<li><a href="homeadmin.php"><b>Home</b></a>
				<li><a href="#"><b>View</b></a>
					<ul>
						<li><a href="viewexnewadmin.php">Extra-Curricular</a></li>
						<li><a href="viewconewadmin.php">Co-Curricular</a></li>
					</ul>
				</li>
				<li><a href="AboutUsadmin.php"><b>About us</b></a></li>
				<li><a href="loginadmin.php"><b>Logout</b></a></li>
			</ul>
</div>

<br/><br/><br/><br/><br/><br/><br/>

<?php
	$sql = "SELECT * FROM reg_events;";
	$result = mysqli_query($db,$sql);
	$resultCheck = mysqli_num_rows($result);
	
	if($resultCheck > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<b><u>Registered for, EVENT ID: </u></b>".$row['eventid']."<br>";
			echo "<b><u>NAME: </u></b>".$row['name']."<br>";
			echo "<b><u>SEMESTER: </u></b>".$row['semester']."<br>";
			echo "<b><u>BRANCH: </u></b>".$row['branch']."<br>";
			echo "<b><u>USN: </u></b>".$row['usn']."<br>";
			echo "<b><u>Mobile No.: </u></b>".$row['mobile']."<br><br><br>";
		}
	}
?>

<br/><br/><br/><br/><br/><br/><br/>
</div>
</body>
</html>
