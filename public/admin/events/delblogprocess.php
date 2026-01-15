        <?php
        include "../server.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM blog WHERE id= $id  ";
        $result = $db->query($sql);

             if ($result){
             	//echo "success";
             	header("location:../blog.php");
             }
             else{
             	echo "Please try again" .$db->error;
             }



        ?>
