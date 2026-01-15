<?php
include 'server.php';


$name = $_POST['name'];
$designation = $_POST['designation'];
$area_of_specs = $_POST['area_of_specs'];
$acad_qualification = $_POST['acad_qualification'];
$id = $_POST['staffprofile_id'];
$sql = "UPDATE staff SET name = '$name', designation = '$designation', 	acad_qualification = '$acad_qualification', area_of_specs = '$area_of_specs'  WHERE id = '$id'";
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
