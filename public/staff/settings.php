  <?php include_once '../server.php';
  
if (isset($_SESSION['email'])) { ?>
<?php include_once 'header_admin.php';?>
  <?php include_once 'nav.php';?>
<?php

$query2 = "SELECT * FROM staff WHERE email = '".$_SESSION['email']."' ";
$result2 = mysqli_query($db, $query2);
$name2 = mysqli_fetch_assoc($result2);
$cur_pass = $name2['password'];

                if (isset($_POST['passupdate'])){
  $oldpass = mysqli_real_escape_string($db, $_POST['oldpass']);
  $newpass = mysqli_real_escape_string($db, $_POST['newpass']);
  $conpass = mysqli_real_escape_string($db, $_POST['conpass']);
  
   $oldpass = md5($oldpass);
    $newpass = md5($newpass);
    $conpass = md5($conpass);
  if ($oldpass == $cur_pass) {
                if ($newpass == $conpass) {    
                               $update = "UPDATE staff SET password = '$newpass' WHERE email = '".$_SESSION['email']."' ";
                                 $check = mysqli_query($db, $update); # code...
                                   echo "<script type='text/javascript'>
  alert('Password successfully Changed')
</script>"; 
                                           }else{
                                             array_push($errors, "The New Password did not match with Confirm Password");
                                           } 
                                         
  
}else{
  array_push($errors, "The Old password is incorrect");
}
  
}
?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include_once 'sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Settings</li>
          </ol>

          <!-- Page Content -->
          <h1>Settings</h1>

           <div class="main-content">

                <!-- row area end -->
                     <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Add a New Staff</div>
        <div class="card-body">
          <?php include 'errors.php';?>
                            <form role="form" method="post" action="settings.php">
                                        <div class="form-group">
                                            <label>Old password</label>
                                            <input class="form-control" name="oldpass" type="password" />
                                        </div>
                                 <div class="form-group">
                                            <label>New Password</label>
                                            <input class="form-control" name="newpass" type="password" />
                                        </div>
                                <div class="form-group">
                                            <label>confirm Password</label>
                                            <input class="form-control" name="conpass" type="password" />
                                        </div>


                                        <div class="text-right"><input type="submit" name="passupdate" class="btn btn-success btn-block" value="Change"></div>


                                    </form>

                            </div>

                    </div>
                  </div>

              </div>
        </div>
      </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2019 French Village Nigeria</span>
            </div>
          </div>
        </footer>

      <!-- /.content-wrapper -->

    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
  
<?php include_once 'footer_admin.php';?>

<?php }
else{ 
header("location: logout.php");
} ?>