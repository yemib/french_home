
        <?php
        include "../server.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM departments WHERE id=$id";
        $result = $db->query($sql);
             echo "<script>window.location='../course.php'</script>";
             



        ?>
