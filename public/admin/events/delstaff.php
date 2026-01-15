
        <?php
        include "../conn.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM staff WHERE id= $id  ";
        $result = $conn->query($sql);

             if ($result){
             	//echo "success";
             
             echo "<script>window.location='../fetchstaff.php'</script>";
             }
             else{
             	echo "Please try again" .$conn->error;
             }



        ?>
