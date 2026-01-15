<?php
include '../conn.php';
$address = $_POST['address'];

$sql = "UPDATE contact SET address = '$address'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../contact.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
