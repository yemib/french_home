 <?php
 echo $imgid;
 // Get image name
  $img = $_FILES['img']['name'];
  // Get text
  $img_text = mysqli_real_escape_string($db, $_POST['img_text']);
$imgid = mysqli_real_escape_string($db, $_POST['img_text']);
  // image file directory
  $targett = "../img/".basename($img);

  $sql = "UPDATE gallery SET img = '$img', img_text ='$img_text' where id = '$imgid' ";
  // execute query
  if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
    $msg = "Image uploaded successfully";
    header('location:gallery.php');
  }else{
    $msg = "Failed to upload image";
  }
  
  ?>