<?php
include '../conn.php';
$mission = $_POST['mission'];

$sql = "UPDATE about SET mission = '$mission'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../about.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
