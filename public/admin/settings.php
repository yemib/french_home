

<?php include 'server.php';
$succes = "<div class='alert alert-success alert-dismissible'>
  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Profile successfully updated.
</div>";
 if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  $errors = array(); 
$query = "SELECT * FROM admin WHERE email = '".$_SESSION['email']."' ";
$result = mysqli_query($db, $query);

$query2 = "SELECT * FROM admin WHERE email = '".$_SESSION['email']."' ";
$result2 = mysqli_query($db, $query2);
$name2 = mysqli_fetch_assoc($result2);
$cur_pass = $name2['password'];
?>
<?php
if (isset($_POST['passupdate'])){
  $oldpass = mysqli_real_escape_string($db, $_POST['oldpass']);
  $newpass = mysqli_real_escape_string($db, $_POST['newpass']);
  $conpass = mysqli_real_escape_string($db, $_POST['conpass']);

$oldpass = md5($oldpass);
$newpass = md5($newpass);
$conpass = md5($conpass);
  if ($oldpass == $cur_pass) {
                if ($newpass == $conpass) {    
                               $update = "UPDATE admin SET password = '$newpass' WHERE email = '".$_SESSION['email']."' ";
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
      <?php include_once 'sidebar.php';

?>

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

          <hr>
           <div class="main-content">
           
                <!-- row area end -->

            <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Change Password</div>
          <form role="form" method="post" action="settings.php">
                              <?php include 'errors.php';?>
                   <div class="form-group">
                      <label  class="col-sm-4 control-label">Old password</label>
                  <div class="col-sm-12">
                     <input class="form-control" name="oldpass" type="password" value="" />
                   </div>
                                        </div>
                       <div class="form-group">
                          <label  class="col-sm-4 control-label">New Password</label>
                          
                  <div class="col-sm-12">                        
                          <input class="form-control" name="newpass" type="password" />
                                        </div>
                                      </div>
                <div class="form-group">
                <label  class="col-sm-6 control-label">Confirm Password</label>
                <div class="col-sm-12">
                <input class="form-control" name="conpass" type="password" />
              </div>
            </div>
                                                                                                                                           
                <div class="form-group"> 
                <div class="col-sm-12">                      
        <button type="submit" name="passupdate" class="btn btn-success btn-block">Change</button>
                      </div>  
                      </div>               

                                    </form>
                                  </div>
                                

            <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">Update Profile</div>
                            <form role="form" method="post" action="events/editprofile.php">
                              <?php $name = mysqli_fetch_assoc($result);
                                          $id = $name['email'];
                              ?>
                    <div class="form-group">
                   <label class="col-sm-6 control-label">Update First Name</label>
                    <div class="col-sm-12">
                    <input class="form-control" type="text" name="f_name" value="<?php echo $name['f_name'];?>" />
                                        </div>
                                      </div>
                                 <div class="form-group">
                            <label class="col-sm-6 control-label">Update Last Name</label>
                            <div class="col-sm-12">
                              <input class="form-control" type="text" name="l_name" value="<?php echo $name['l_name']?>" />
                                        </div>
                                      </div>

                                        <input type="hidden" name="" value="<?php echo $id ?>">
                                <div class="form-group">
                                <label class="col-sm-6 control-label">Update Email</label>
                                <div class="col-sm-12">
                                            <input class="form-control" type="email" name="email" value="<?php echo $name['email']?>" />
                                        </div>
                                      </div>
                                                                                                                                           
                            <div class="form-group">
                            <div class="col-sm-12">
                               <button type="submit" name="update" class="btn btn-success btn-block">Update</button>
                                        </div>
                                      </div>

                                    </form>
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

      </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include 'logoutmodal.php';?>
<?php include_once 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>