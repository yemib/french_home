<?php
include '../server.php';
$title = mysql_real_escape_string($db, $_POST['title']);
$id = mysql_real_escape_string($db, $_POST['event_id']);
$content = mysql_real_escape_string($db, $_POST['content']);

$sql = "UPDATE event SET title = '$title', content = '$content' WHERE id = '$id'";
//die ($sql);
$result = $db->query($sql);

     if ($result){
     	//echo "success";
    
        echo "<script>window.location='../event.php'</script>";
     }
     else{
     	echo "Please try again" .$db->error;
     }

 ?>
