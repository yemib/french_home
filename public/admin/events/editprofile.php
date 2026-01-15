<?php
include '../server.php';

if (isset($_POST['update'])) {
	 $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    # code...
}
   

    $update = "UPDATE admin SET f_name = '$f_name', l_name = '$l_name' WHERE email = '".$_SESSION['email']."' ";
    $updateresult = $db->query($update);

     if ($updateresult){
     	//echo "success";
 echo $succes;
        echo "<script>window.location='../settings.php'</script>";
             }
     else{
     	echo "Please try again" .$db->error;
     }

 ?>
