<?php
include "../conn.php";
$int = $_GET['int'];
$insert = "INSERT INTO intensive(name)VALUES('$int')";
$result = $conn->query($insert);

     if ($result){
     	//echo "success";
     	header("location:../course.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
