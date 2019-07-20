<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Co-Curricular</title>
	<style>
	body{
			color:#fff;
			background:#121212;
		}
	.bgimage{
			background-image:url('bg16.jpg');
			background-size: 100% 100%;
			width: cover;
			height: cover;
	}
	ul{
		list-style-type: none;
		margin:0px;padding:0px;
	}
	ul li{
		float:left;
		width:150px;
		height:40px;
		#background-color:#008080;
		font-size:20px;
		line-height:40px;
		text-align:center;
		opacity:0.8;
	}
	ul li a{
		text-decoration:none;
		color:white;
		display:block;
	}
	ul li a:hover{
			background-color:#52BE80;
	}
	ul li ul li{
		display:none;
	}
	ul li:hover ul li{
		display:block;
	}
	*{
		box-sizing: border-box;
	}
	.column {
		float: left;
		width: 18%;
		height: 45%;
		padding: 40px;
	}
	/* Clearfix (clear floats) */
	.row::after {
		content: "";
		clear: both;
		display: table;
	}
	.column figcaption:hover{
		color:gold;
	}
	.form-popup {
		display: none;
		position: fixed;
		bottom: 0;
		right: 15px;
		border: 3px solid #f1f1f1;
		z-index: 9;
	}
	.form-container {
		max-width: 300px;
		padding: 10px;
		background-color: white;
	}
	.form-container .btn {
			background-color: #4CAF50;
			color: white;
			padding: 16px 20px;
			border: none;
			cursor: pointer;
			width: 100%;
			margin-bottom:10px;
			opacity: 0.8;
	}
	.form-container .cancel {
			background-color: red;
	}
	.form-container .btn:hover, .open-button:hover {
			opacity: 1;
	}
	.open-button{
			background-color: #6EA55F; /* Green */
			border: none;
			color: white;
			padding: 2px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 12px;
			width:50px;
			heigth:20px;
   }
	.btn:hover {
			background-color: blue;
			color: white;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);	
	}
	</style>
</head>
<body>
	<div class="bgimage">
	
		<marquee direction="right"><h1><u>CO-CURRICULAR</u></h1></marquee>
	
		<div>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="#">View</a>
					<ul>
						<li><a href="ViewPage1.php">Extra-Curricular</a></li>
					</ul>
				</li>
				<li><a href="AboutUs.php">About us</a></li>
				<li><a href="loginstud.php">Logout</a></li>
			</ul>
		</div>
		
	<br/><br/><br/><br/>
		<div class="row">
			<div class="column">
				<img src="Chinmayi.jpg" alt="Chinmayi" title="Chinmayi V.K, 7th sem, CSE" style="width:100%" onclick="openform()">
				<button class="open-button" onclick="openForm()">View</button>
			</div>
			<div class="column">
				<img src="Shrikara.jpg" alt="Shrikara" title="Shrikara, 5th sem, CSE" style="width:100%">
				<button class="open-button" onclick="openForm()">View</button>
			</div>
			<div class="column">
				<img src="Bhoomika.jpg" alt="Bhoomika" title="Bhoomika, 1st sem, CSE" style="width:100%">
				<button class="open-button" onclick="openForm()">View</button>
			</div>
		</div>
		
		<div class="row">
			<div class="column">
				<img src="Chinmayi.jpg" alt="Chinmayi" title="Chinmayi V.K, 7th sem, CSE" style="width:100%">
				<button class="open-button" onclick="openForm()">View</button>
			</div>
			<div class="column">
				<img src="Shrikara.jpg" alt="Shrikara" title="Shrikara, 5th sem, CSE" style="width:100%">
				<button class="open-button" onclick="openForm1()">View</button>
			</div>
			<div class="column">
				<img src="Bhoomika.jpg" alt="Bhoomika" title="Bhoomika, 1st sem, CSE" style="width:100%">		
				<button class="open-button" onclick="openForm2()">View</button>
			</div>
		</div>
		
		<div class="form-popup" id="myForm">
			<form action="" class="form-container">
				<h1>Individual Profile</h1>
				<img class="b" src="Chinmayi.jpg" alt="plant"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<button type="submit" class="btn">Upload</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
			</form>
		</div>
		
	<br/><br/><br/><br/>
	</div>
	
	
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}


function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>