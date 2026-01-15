
        <?php
        include "../server.php";
        $num = $_GET['num'];
        $sql = "DELETE FROM academics WHERE id= $num  ";
        $result = $db->query($sql);
        
             
             echo "<script>window.location='../acad.php'</script>";

        ?>
