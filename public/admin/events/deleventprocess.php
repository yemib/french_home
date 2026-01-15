
        <?php
        include "../server.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM event WHERE id= $id  ";
        $result = $db->query($sql);

             
             echo "<script>window.location='../event.php'</script>";

        ?>
