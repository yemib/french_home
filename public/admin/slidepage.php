<?php  include_once 'server.php';?>
      <?php    if (isset($_SESSION['email'])) {
               
  include_once 'header_admin.php';
    $result = "SELECT * FROM slider_pics";
    $fetch = $db->query($result);
    
if(isset($_POST['update'])){
  // Get image name
  $slider_name = $_FILES['slider_name']['name'];
  // Get text
  $slider_tag = mysqli_real_escape_string($db, $_POST['slider_tag']);
  $id = mysqli_real_escape_string($db, $_POST['id']);

  // image file directory
  $targett = "../slider_pics/".basename($slider_name);
  $date = date("F j, Y, g:i a");
  
    $update2 = mysqli_query($db, "UPDATE slider_pics SET slider_tag = '$slider_tag', slider_name = '$slider_name', date_updated = '$date' where id = '$id' ");
    // move_uploaded_file($slider_name, $targett);
    // die(mysqli_error($db));
  if (move_uploaded_file($_FILES['slider_name']['tmp_name'], $targett)) {
    echo "<script type='text/javascript'>
	alert('Successfully Updated');
</script>";
  }else{
    echo "<script type='text/javascript'>
	alert('Not Successfully');
</script>";
  }

}
?>
 
  <?php include_once 'nav.php';?>

    <div id="wrapper">
      <!-- Sidebar -->
      <?php include_once 'sidebar.php';
      $result = mysqli_query($db, "SELECT * FROM admin WHERE email = '".$_SESSION['email']."' ");?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

         <div class="main-content">
                         <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Slider Update</h2>
               <div class="table">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <thead class="thead-dark">
                  <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>View</th>
                    <th>Edit</th>
                  </tr>
                  </thread>
    <?php 
        if ($fetch->num_rows>0){
                	while($rows=$fetch->fetch_assoc()){
                 		$id = $rows['id'];
                 		$slider_tag = $rows['slider_tag'];
                 		$slider_name = $rows['slider_name'];?>
                  <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $slider_tag ?></td>
                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#ViewModal<?php echo $id ?>">View</a></td>
                    <td><a class="btn btn-success" data-toggle="modal" data-target="#EditModal<?php echo $id ?>">Edit</a></td>
                  </tr>
                  
                    
             <!--View Modal-->
            <div class="modal fade bd-example-modal-lg" id="ViewModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <!--Header-->
                  <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" align="center"><?php echo $slider_tag ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                   </div>
                        <div class="modal-body">
                           <div class="row">
                                   <span id="img_id"> <img id="img" src="../slider_pics/<?php echo $slider_name?>" alt="" style="width:100%; height:auto;"></span>
                        </div>
                        <div class="row">
                            <h4><?php echo $slider_tag ?></h4>
                        </div>
                            </form>
                    </div>
                  </div>
                </div>
              </div>
                
             <!--Edit Modal-->
             <div class="modal fade" id="EditModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!--Header-->
                  <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" align="center"><?php echo $slider_tag ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                   </div>
                        <div class="modal-body">
                          <form method="POST" action="slidepage.php" enctype="multipart/form-data">
                              <input type="hidden" value="<?php echo $id?>" name="id">
                              <label>Picture</label>
                              <div class="custom-file">
                                <input type="file" name="slider_name" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose Picture</label>
                              </div>
                              <label>Picture Tag</label>
                              <input type="text" name="slider_tag" value="<?php echo $slider_tag ?>" class="form-control">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="update" class="btn btn-success">Update changes</button>
                              </div>
                            </form>
                    </div>
                  </div>
                </div>
              </div>
                  <?php }
                  }?>
                  
                </table>
              <!-- Table -->
            </div>
            <!-- End Box -->
            </div>
                        </div>
                        
                    </div>
                    
                </div>
                  
              </div>
                <!-- row area end -->
             </div>

          
        <!-- End Box -->
                        </div>
                        
                    </div>
                    
                </div>
                  
              </div>
                <!-- row area end -->
             </div> 
          </div>
          

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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
  
                                    
<?php include_once 'footer_admin.php';?>

<?php }
else{ 
header("location: ../loginadmin.php");
} ?>
