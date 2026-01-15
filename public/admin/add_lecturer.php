  <?php include 'server.php';
if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';

  // REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $email= mysqli_real_escape_string($db, $_POST['email']);
  $staff= mysqli_real_escape_string($db, $_POST['staff']);
 
  if ($password != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM staff WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
       if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    // if ($staff == "0") {
    //   $staff = "0";
    //   # code...
    // }else{
    //   $staff = "1";
    // }
$password = md5($password);
$acad_qualification = "";
$designation = "";
$img = "";
$area_of_specs = "";
$phone = "";
$office_address = "";
    $query = "INSERT INTO staff(name, designation, acad_qualification, img, area_of_specs, email, password, phone, office_address, principal) 
          VALUES('$first_name', '$designation', '$acad_qualification', '$img', '$area_of_specs', '$email', '$password', '$phone', '$office_address', '$staff')";
    mysqli_query($db, $query);
    // die(mysqli_error($db));
    ?>
  <script type="text/javascript">
  alert('<?php echo "register successfully" ?>')
</script>
<?php
  }
}?>
  <script type="text/javascript">
      var baseUrl='http://example.com';
      function ConfirmDelete()
      {
            if (confirm("Delete Account?"))
                 location.href=baseUrl+'/deleteRecord.php';
      }
  </script>


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
            <li class="breadcrumb-item active">Define Profiles</li>
          </ol>


                <div class="card card-register mx-auto mt-5">
        <div class="card-header text-center">Add a New Staff</div>
        <div class="card-body">
          <form role="form" method="post" action="add_lecturer.php">

                           <?php include 'errors.php';?>
            <div class="form-group">
                  <div class="form-label-group">
                    <input  type="text" id="firstName" name="first_name" class="form-control"  placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">Name</label>
                  </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                    <label for="email">Email</label>
                  </div>
                </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password"  id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="password_2" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
             <div class="form-group">
              <div class="form-row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label id="staff" style="font-size: 20px">Principle</label>
                    <input type="radio" name="staff" value="1">
                    
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="form-group">
                    <label id="staff" style="font-size: 20px">Director</label>
                    <input type="radio" name="staff" value="3">
                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label id="staff" style="font-size: 20px">Staff</label>
                    <input type="radio" name="staff" value="0">
                    
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label id="staff" style="font-size: 20px">lecturer</label>
                    <input type="radio" name="staff" value="4">
                    
                  </div>
                </div>
              </div>
            </div>
             <!--<div class="form-group">-->
             <!--   <div class="form-label-group">-->
             <!--       <select name="" class="form-control">-->
             <!--           <option>Select Category</option>-->
             <!--           <option value="director">Diretor</option>-->
             <!--           <option value="principal">Principal</option>-->
             <!--           <option value="lecturer">Lecturer</option>-->
             <!--           <option value="staff">Staff</option>-->
             <!--       </select>-->
             <!--     </div>-->
             <!--   </div>-->
            <button type="submit" name="submit" class="btn btn-success btn-block" href="#">Add</button>
          </form>
         
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