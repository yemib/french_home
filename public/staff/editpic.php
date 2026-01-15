<?php  include 'server.php';
   if ($_SESSION['email']) :
    include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
 ?>
  
<?php include_once 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>