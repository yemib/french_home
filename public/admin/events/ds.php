<?php
include '../conn.php';
$post = $_POST['post'];
$content = $_POST['content'];

$sql = "UPDATE director_speech SET content = '$content'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../ds.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
