<?php
include "../conn.php";
$prog = $_GET['prog'];
$insert = "INSERT INTO programme(name)VALUES('$prog')";
$result = $conn->query($insert);

     if ($result){
     	//echo "success";
     	header("location:../course.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
