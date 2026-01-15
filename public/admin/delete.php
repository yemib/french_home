<?php
include 'server.php';
if ($_SESSION['email']) :
$id = $_GET['id'];
$sql = "DELETE FROM gallery WHERE id=:id";
$res = mysqli_query($db, $sql);
?>
<input type="submit" name="delete" class="btn btn-rounded  btn-danger mb-2" value="Remove">
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>