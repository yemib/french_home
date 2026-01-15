<?php
include '../conn.php';
$post = $_POST['post'];
$content = $_POST['content'];
$preview = $_POST['preview'];

$sql = "UPDATE student_brochure SET preview = '$preview', content = '$content'";
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../sb.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
