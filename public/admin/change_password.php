<?php include 'server.php';
if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  $danger = "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Danger!</strong> No record found for this ID.
</div>";
$danger2 = "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Danger!</strong>Error occur.
</div>";
$success = "<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Password successfully updated.
</div>";

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
            <li class="breadcrumb-item active">Update Pages</li>
          </ol>

          <!-- Page Content -->
          <h1>Change Password</h1>
<?php if (isset($_POST['update'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $user_check_query = "SELECT * FROM staff WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $staff = mysqli_fetch_assoc($result);

  if ($staff) {
    if ($staff['email'] == $email) {
       # code...
       $password = md5($password);
            $update = "UPDATE staff SET password = '$password' WHERE email = '$email'  ";
           $chkupdate = mysqli_query($db, $update);
           echo $success;
      
    }
    }else{
      echo $danger;
    # code...
  }

 
  # code...
}

?>
                           <?php include 'errors.php';?>
          <div class="main-content">
          	<div class="card">
           <div class="card-body">
           	<div class="col-6">
          	<form class="form" method="post" action="change_password.php">

          		<p><label>Staff ID</label>
          		<input type="email" class="form-control" name="email" required="">
              <label>New Password</label>
          		<input type="password" class="form-control" name="password" required=""></p>
          		<button class="btn btn-success" type="submit" name="update">Change</button>
          		
          	</form>
          	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once 'footer_admin.php';?>
<?php else :?>
<?php  echo "<script>window.location='../loginadmin.php'</script>";?>
<?php endif;?>