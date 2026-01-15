<?php
include '../server.php';
$title = $_POST['title'];
$id = $_POST['blog_id'];
$content = $_POST['content'];

$sql = "UPDATE blog SET title = '$title', content = '$content' WHERE id = '$id'";
//die ($sql);
$result = $db->query($sql);

     if ($result){
     	//echo "success";
        echo "<script>window.location='../blog.php'</script>";
     }
     else{
     	echo "Please try again" .$db->error;
     }

 ?>
