<?php 
include "connection.php";

?>
<html>
<head>
<style>
body{
			color:#111;
			background:#121212;
		}
		ul{
		list-style-type: none;
		margin:0px;padding:0px;
	}
	ul li{
		float:left;
		width:150px;
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
			background-color:#27AE60;
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
</style>
<title> regex</title>
<link rel="stylesheet" type="text/css" href="styleregco.css">

</head>
<body class="bgimage">
	<div >
	
	<marquee direction="right"><h1><u>Register for EXTRA-CURRICULAR</u></h1></marquee>
		
		<br/><br/><br/>
		
		<div>
			<ul>
				<li><a href="home.php"><b>Home</b></a></li>
				<li><a href="#"><b>View</b></a>
					<ul>
						<li><a href="viewexnew.php">Extra-Curricular</a></li>
						<li><a href="viewconew.php">Co-Curricular</a></li>
					</ul>
				</li>
				<li><a href="AboutUs.php"><b>About us</b></a></li>
				<li><a href="loginstud.php"><b>Logout</b></a></li>
			</ul>
		</div>
    
	<br/><br/><br/><br/>

		<div class="login-page">
	<div class="form">
		<form class="login-form" method="post" enctype="multipart/form-data">
		
		
		<input type="text" placeholder="name"  name="name" required />
		<input type="text" placeholder="email" name="email" required />
		<input type="text" placeholder="branch" name="branch" required />
		<input type="text" placeholder="field" name="field" required />
			<p> Profile Picture:<input type="file" placeholder="insert image" name="image1" required /></p>
	<p>Picture exibiting the Talent:	<input type="file" placeholder="insert image" name="image2" required /></p>
	<input type="file" placeholder="insert image" name="image3" required />
		<input type="file" placeholder="insert image" name="image4" required />
		<input type="file" placeholder="insert image" name="image5" required />
		<button name="submit">submit</button>
		
		
		<?php 
		$error=" ";
		if(isset($_POST['submit']))/*&& isset($_POST['name'])&& isset($_POST['price'])&& isset($_POST['quantity'])&& isset($_POST['image'])&&isset($_POST['s'])*/
		{
			$n=$_POST['name'];
			
			$p=$_POST['email'];
			$q=$_POST['field'];
			$z=$_POST['branch'];
			//$i=$_POST['image'];
			
			$error="here";
			 $image1 = $_FILES['image1']['tmp_name'];
        $img1= addslashes(file_get_contents($image1));
		$image2 = $_FILES['image2']['tmp_name'];
        $img2= addslashes(file_get_contents($image2));
		$image3 = $_FILES['image3']['tmp_name'];
        $img3= addslashes(file_get_contents($image3));
		$image4 = $_FILES['image4']['tmp_name'];
        $img4= addslashes(file_get_contents($image4));
		$image5 = $_FILES['image5']['tmp_name'];
        $img5= addslashes(file_get_contents($image5));
			/*if(
			=="flower")
			   $qq="insert into flower(name,price,quantity,image) values ('$n','$p','$q','$img')";
			else
				$qq="insert into fruit(name,price,quantity,image) values ('$n','$p','$q','$img')";*/
			
			
			$qq="INSERT INTO regisex (name,email,field,branch,image1,image2,image3,image4,image5) VALUES ('$n','$p','$q','$z','$img1','$img2','$img3','$img4','$img5');";
			
			
			
			if(mysqli_query($conn,$qq))
           {
				//$row=mysqli_fetch_array($res);
				//$r=$row[0];
			//	header("location:purchase.php?id=$r&id2=$pr");exit();
			$error="Registered sucessfully";
			}
			else
				$error="could not add";
		}
			 
			 
		 else $error="details not filled";?>
		<p><?php echo $error;?></p>
		</form>
		</div>
		</div>
		
<br/><br/><br/><br/><br/><br/>	
</div>	
</body>
</html>