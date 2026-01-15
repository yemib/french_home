
        <?php
        include "../conn.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM intensive WHERE id= $id";
        $result = $conn->query($sql);

             if ($result){
             	//echo "success";
             
             echo "<script>window.location='../course.php'</script>";
             }
             else{
             	echo "Please try again" .$conn->error;
             }



        ?>
