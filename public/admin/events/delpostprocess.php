
        <?php
        include "../conn.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM postgraduate WHERE id= $id";
        $result = $conn->query($sql);

             if ($result){
             	//echo "success";
             	header("location:../course.php");
             }
             else{
             	echo "Please try again" .$conn->error;
             }



        ?>
