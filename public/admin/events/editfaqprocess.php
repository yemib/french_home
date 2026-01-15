<?php
include '../conn.php';
$question = $_POST['question'];
$id = $_POST['faq_id'];
$answer = $_POST['answer'];

$sql = "UPDATE faq SET question = '$question', answer = '$answer' WHERE id = '$id'";
//die ($sql);
$result = $conn->query($sql);

     if ($result){
     	//echo "success";
     	header("location:../faq.php");
     }
     else{
     	echo "Please try again" .$conn->error;
     }

 ?>
