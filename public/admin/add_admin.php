<?php include 'server.php';
if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';

  // REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $email= mysqli_real_escape_string($db, $_POST['email']);
 
  if ($password != $password_2) {
    echo "not working";
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
       if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO admin(f_name, l_name, email, password) 
          VALUES('$first_name', '$last_name', '$email', '$password')";
    mysqli_query($db, $query);
  ?>
  <script type="text/javascript">
  alert('<?php echo "register successfully" ?>')
</script>
<?php
  }
}?>


    <div id="wrapper">

      <!-- Sidebar -->
      <?php include_once 'sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Define Profiles</li>
          </ol>

<div class="main-content">
           
                <!-- row area end -->
                <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Add New Admin</div>
        <div class="card-body">
                            <form role="form" method="post" action="add_admin.php">
                              <div class="form-group">
                                <?php include 'errors.php';?>
                                            <label>First Name</label>
                                            <input class="form-control" type="text" name="first_name" />
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" type="text" name="last_name" />
                                        </div>
                                 <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" />
                                        </div>
                                <div class="form-group">
                                  <div class="row">
                                  <div class="col-md-6">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Confirm Password</label>
                                            <input class="form-control" type="password" name="password_2" />
                                        </div>
                                </div>
                              </div>
                              
                                <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Add</button>
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
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
<?php include_once 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>