 <?php
 //include "session.php";
 session_start();
 /*if(!isset($_SESSION['j']))
 $j=0;
 else
	
 $j=$_SESSION['j']++;
 $_SESSION['j']=$j;*/
/* $link = mysql_connect("localhost", "root", "");
  mysql_select_db("first");
  $sql="select * from xx_sample";
 $result = mysql_query($sql);  */
 
 
  include 'connection.php';
 $q="SELECT * FROM regisex;";
 
 
 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
 $count=0;
?>
 
 <html>
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>display</title>
   <style>
   body{
			color:#27AE60;
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
		color:white;
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
   .open-button{
	background-color: #6EA55F; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 12px;
	width:200px;
	
   }
   .form-popup{
   
   display:none;
   position:fixed;
   z-index:1;
   padding-top:100px;
   left:0;
   top:0;
   width:100%;
   height:100%;
   overflow:auto;
   background-color:rgb(0,0,0);
   background-color:rgba(0,0,0,0.4);
   }
   table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}
.btn,btn cancel {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 12px;
	width:200px;
}
.btn:hover {
    background-color: blue;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.open-button:hover{
	    background-color: blue;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	}

.form-content{
	 background-color:  #fefefe;
    margin: auto;
    padding: 50px;
    border: 1px solid #888;
    width: 65%;
	height:50%;
	}

table {
    border-collapse: collapse;
   width:400px;
}
tr{

}

.para{
	margin-top:-300px;

}
th, td {
    padding: 5px;
}
tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}
td:hover {background-color:#808080}
.a{
 width:200px;
 height:200px;
 }
 .b{
 width:50%;
 height:80%;
 float:left;
 }
 .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

   </style>
   	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
   <link rel="stylesheet" type="text/css" href="styleviewex.css">
   
   </head>
   
   
  
    <body>
  
   <div class="bgimage">
		<marquee direction="right"><h1><u>EXTRA-CURRICULAR</u></h1></marquee>
		
		<br/><br/><br/>
		
		<div>
			<ul>
				<li><a href="homeadmin.php"><b>Home</b></a></li>
				<li><a href="#"><b>View</b></a>
					<ul>
						<li><a href="viewconewadmin.php">Co-Curricular</a></li>
					</ul>
				</li>
				<li><a href="AboutUsadmin.php"><b>About us</b></a></li>
				<li><a href="loginadmin.php"><b>Logout</b></a></li>
			</ul>
		</div>
    
	<br/><br/><br/><br/>
  
  
	<?php
  echo "<table><tr>";
   while($row=mysqli_fetch_row($result))
   {
	   echo "<td><figure>";
	   $v=$row[0];
	  // echo $row[0];
	   echo  "<img class='a' src='nex.php?id=$v' alt='plant' onclick='openForm($v,$row[2])'  />";
	   echo	 " <center>";
	   echo	"NAME:"."<figcaption>$row[1]</figcaption>";
	echo	  "EMAIL"."<figcaption>$row[2]</figcaption>";
	echo	  "BRACNH:"."<figcaption>$row[4]</figcaption>";
	echo	  "<figcaption>$row[3]</figcaption></center>";
	
		echo  "</figure><center>";
		echo  "<button class='open-button' onclick='openForm($v,$row[0])'>OPEN</button>";
         echo "</center>";

   echo "</td>";
   $count++;
   if($count %3==0)
	echo "</tr><tr>";
   ?>
   <div class="form-popup" id="myForm">
   
  <form  action="" class="form-container" >
    <img class="b"  alt="image" id="ii"/>
	<img class="b"  alt="image" id="gg"/>
	<img class="b"  alt="image" id="ff"/>
	<img class="b"  alt="image" id="zz"/>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
	
           <!-- <input type="button" class="btn" onclick="Redirect()" value="Add to Cart"/>-->
	
    <center><button type="button" class="btn cancel" onclick="closeForm()">Close</button></center>
	
 
  </form>
  
</div>
   <?php } echo "</tr>
   </table>"; ?>
<script>
var i=0;
function openForm(v,p) {
    document.getElementById("myForm").style.display = "block";
	document.getElementById("ii").src="n1ex.php?id="+v;
	document.getElementById("gg").src="n2ex.php?id="+v;
	document.getElementById("ff").src="n3ex.php?id="+v;
	document.getElementById("zz").src="n4ex.php?id="+v;
	document.getElementById("pr").innerHTML=""+p+"";
	i=v;
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

</script>

   </center>
   <br/><br/><br/><br/>
   </div>
   </body>
   
</html>