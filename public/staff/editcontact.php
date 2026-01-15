<?php
include 'server.php';


$id = $_POST['staff_id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "UPDATE staff SET email = '$email', phone = '$phone', office_address = '$address' WHERE id = '$id'";
//die ($sql);
$result = $db->query($sql);

     if ($result){
     	//echo "success";
     	header("location:update.php");
     }
     else{
     	echo "Please try again" .$db->error;
     }

 ?>
