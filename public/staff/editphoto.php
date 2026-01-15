<?php
include 'server.php';
if (isset($_POST['upload'])) {
  // Get image name
  $img = $_FILES['img']['name'];
  // Get text

  // image file directory
  $targett = "../img/".basename($img);

  $sql = "INSERT INTO staff (img) VALUES ('$img') WHERE email = '".$_SESSION['email']."' ";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}

$id = $_POST['staff_id'];
$sql = "UPDATE staff SET img = '$img' WHERE email = '".$_SESSION['email']."' ";
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
