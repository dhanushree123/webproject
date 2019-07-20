<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin home</title>
	<style>
	body{
			color:#111;
			background:#121212;
		}
	.bgimage{
	background-image:url('homes.jpg');
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

<marquee direction="right"><h1><u>HOME</u></h1></marquee>

<div>
			<ul>
				<li><a href="#"><b>View</b></a>
					<ul>
						<li><a href="viewexnewadmin.php">Extra-Curricular</a></li>
						<li><a href="viewconewadmin.php">Co-Curricular</a></li>
					</ul>
				</li>
				<li><a href="UpcomingEventsadmin.php"><b>Upcoming Events</b></a></li>
				<li><a href="AboutUsadmin.php"><b>About Us</b></a></li>
				<li><a href="loginadmin.php"><b>Logout</b></a></li>
			</ul>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/>

<p><h1 ><center><big>WELCOME TO</big></center> </h1></p> 
<p><h1><center><big>PRATHIBHAANVESHANA</big></center></h1></p>
</div>
</body>
</html>