<?php include '../server.php';

if (isset($_SESSION['email'])) { ?>
<?php include_once 'header_admin.php';?>
  <?php include_once 'nav.php';?>
  <?php
  //include 'server.php';

  // Initialize message variable
  $msg = "";
  $img="";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $img = $_FILES['img']['name'];
    // Get text
    $img_text = mysqli_real_escape_string($db, $_POST['img_text']);

    // image file directory
    $targett = "../img/".basename($img);

    $sql = "INSERT INTO staff (img, img_text) VALUES ('$img', '$img_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM staff");
  $rt = mysqli_query($db, "DELETE * FROM staff");
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
<div class="t">
    <?php
while ($row = mysqli_fetch_array($result)) {
}?>

    <h5>Welcome
        <?php
            $username = $_SESSION['username'];
            echo " $username";
        

        ?></h5>
</div>
          <?php include 'indexlec.php'?>
        </div>
      </div>
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2019 French Village Nigeria</span>
            </div>
          </div>
        </footer>
    </div>

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

<?php }
else{ 
header("location: logout.php");
} ?>
