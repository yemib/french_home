<?php
include "../conn.php";
$pre = $_GET['post'];
$insert = "INSERT INTO postgraduate(name)VALUES('$pre')";
$result = $conn->query($insert);

     if ($result){
     	//echo "success";
     	header("location:../course.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }
