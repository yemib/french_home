<?php include 'server.php'; 
 if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
 ?>

<?PHP 
      $query = mysqli_query($db, "SELECT * FROM dept");?>
             
<table class="table">
                                <tr style="height: 10px">
                                     <th scope="row">
<?php while($data = mysqli_fetch_array($query)); {
                                # code...
                               echo $data ['name']; 
                                   }
                                   ?>
                              JCBxdvJCVJHhjvcSVDh </th>
                           </tr>
                       </table>


<?PHP 
      $query = "SELECT * FROM dept";
      $re = mysqli_query($db, $query);
      while($rw = mysqli_fetch_array($re)){;
      $name = $rw[0];
      $id = $rw[1];
      echo $name;
      echo $id;}?>
      <?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>