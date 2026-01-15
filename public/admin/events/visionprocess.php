<?php
include '../conn.php';
$vision = $_POST['vision'];

$sql = "UPDATE about SET vission = '$vision'";
$result = $conn->query($sql);

     if ($result){     echo "success";     header("location:../about.php");
     } else{     echo "Please try again" .$conn->error; }

 ?>
