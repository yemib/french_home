<?php
include '../conn.php';
$mandate = $_POST['mandate'];

$sql = "UPDATE about SET mandate = '$mandate'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../about.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
