<?php include '../server.php';?>
<!--<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mdbhen93qj2j6e6naaqesoftancsivl5mdflrjf8fqyd38w1"></script>-->
<!--  <script>tinymce.init({ selector:'textarea' });</script>-->
  
  <?php
  if (isset($_SESSION['email'])) { ?>
<?php include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  $username = $_SESSION['username'];
$id = $_SESSION['userid'];
$result = mysqli_query($db, "SELECT * FROM staff WHERE id = $id ");
?>
   <?php 
          if(isset($_POST['submit'])){

            $pdf = $_FILES['pdf']['name'];
            $target = "pdf/".basename($pdf);

            $query = "UPDATE staff SET pdf_name = '$pdf' WHERE id = '$id' ";
            $result = mysqli_query($db, $query);
            if(move_uploaded_file($_FILES['pdf']['tmp_name'], $target)){
              echo "<div class='alert alert-success alert-dismissible'>
                  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Success!</strong> Uploaded Successfully.
                </div>";
            }else{
              echo "Bad";
            }
            // die(mysqli_error($db));
        
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
<?php $select = "SELECT  * FROM staff WHERE id = '$id' ";

                                           $result = $db->query($select);
                                           if ($result->num_rows>0){
                                           	while($rows=$result->fetch_assoc()){
                                            		$pdfid = $rows['pdf_name'];
                                            		echo $pdfid;
                                            		?>
        <div class="box-body">
              <form action="updatecv.php" method="post" enctype="multipart/form-data">
                          <div class="alert alert-warning" role="alert">
                                  Note: Only pdf format is allow else convert to pdt format before uploading!!!
                        </div>
                    <input class="btn btn-dark" type="file" name="pdf">
                  <button class="btn btn-success" type="submit" name="submit">Upload</button>
              </form>
              <embed src="<?php echo 'pdf/'.$pdfid;?>" type="application/pdf" width="100%" height="100%" />
            </div>
          
        <!--<form method="POST" action="cv.php">-->
        <!--    <input type="hidden"  name="text" value="<?php echo $id?>">-->
        <!-- <textarea rows="18"></textarea>-->
        <!-- <div class="text-right"><input type="submit" value='Update' class="btn btn-rounded  btn-success mb-2"></div>-->
        <!-- </form>-->
         <?php
                                           	} }
                                           	?>
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
