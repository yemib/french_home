<?php
include '../conn.php';
$phone = $_POST['phone'];

$sql = "UPDATE contact SET phone_number = '$phone'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../contact.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
