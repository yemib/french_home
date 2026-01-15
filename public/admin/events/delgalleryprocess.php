
        <?php
        include "../server.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM gallery WHERE id= $id  ";
        $result = $db->query($sql);

             if ($result){
             	//echo "success";
             
             echo "<script>window.location='../gallery.php'</script>";
             }
             else{
             	echo "Please try again" .$db->error;
             }



        ?>
