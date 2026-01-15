<?php
include '../conn.php';
$email = $_POST['email'];

$sql = "UPDATE contact SET email = '$email'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../contact.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
