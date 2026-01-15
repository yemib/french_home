<?php
include '../conn.php';
$vision = $_POST['post'];

$sql = "UPDATE director_speech SET content = '$content'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
