<?php
include "../conn.php";
$dept = $_GET['dept'];
$insert = "INSERT INTO departments(name)VALUES('$dept')";
$result = $conn->query($insert);

     if ($result){
     	//echo "success";
     	header("location:../course.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
