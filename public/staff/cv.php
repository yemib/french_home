<?php
include 'server.php';

$text = $_POST['text'];
    $sql = "UPDATE staff SET text = '$text'  WHERE  id = '$id'";
    $result = $db->query($sql);
    // die(mysqli_error());
     if ($result){
     	//echo "success";
     	header("location:updatecv.php");
     }
     else{
     	echo "Please try again" .$db->error;
     }

 ?>
