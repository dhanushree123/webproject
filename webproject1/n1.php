<?php

  $id = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "","registrationtheend");
  //mysql_select_db("nursery");
  // do some validation here to ensure id is safe

 
  $sql = "SELECT image2 FROM regisco WHERE id=$id;";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_assoc($result);
 mysqli_close($link);

  header("Content-type: image/jpg");
  print $row['image2'];
 // echo $row['image'];
  //include 'connection.php';
   //include 'connection.php';
/*  $i = $_GET['id'];
  // do some validation here to ensure id is safe

 // $link = mysql_connect("localhost", "root", "");
 // mysql_select_db("first");
 // $sql = "SELECT IMAGE FROM xx_sample where ID='2'";
 $sql="SELECT image FROM flower where id='2'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
 // mysqli_close($conn);

  header("Content-type: image/jpg");
  print $row['image'];*/
?>
