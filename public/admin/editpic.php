<?php  include 'server.php';
   if ($_SESSION['email']) :
    include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  $id = $_GET['id'];
 ?>
 <style type="text/css">
	#img{
		width: 600px;
		height: auto;
	}
</style>
 <style type="text/css">
    #img_div{
    width: 640px;
    padding: 5px;
    margin: 15px auto;
    border-radius: 5px;
    border: 1px solid #cbcbcb;
  }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   #imgr{
    float: left;
    margin: 5px;
    width: 600px;
    height: 400px;
    border-radius: 5px;
   }
   #up{
    text-transform: uppercase;
   }
                              </style> 

<?php
echo $id;
$getid = $id;
echo $_GET['id'];
if (isset($_POST['upload'])) {
 // Get image name
  $img = $_FILES['img']['name'];
  // Get text
  $img_text = $_POST['img_text'];
   $imgid = $_POST['imgid'];
  // image file directory
  $targett = "../../img/".basename($img);
  $sql = "UPDATE gallery SET img = '$img', img_text = '$img_text' where id = $imgid ";
  // execute query
  mysqli_query($db, $sql);
  die(mysqli_error($db));
//   if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
//     $msg = "Image uploaded successfully";
//   }else{
//     $msg = "Failed to upload image";
//   }
//   die(mysqli_error($db));
  header('location:gallery.php');
}


$result = mysqli_query($db, "SELECT * FROM gallery where id = '$id' ");
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
          <h1>Edit Picture</h1>

          <div class="main-content">
           
             <div class="row">
                        <div class="card">
                                         <?php
                                               $c = 1;
                                        while ($row = mysqli_fetch_array($result)) {
                                                  $id = $row['id'];?>
                                  <div style="padding:10px">
                                  <form method="POST" action="editpic.php" enctype="multipart/form-data" >
                                      <input type="hidden" class="btn btn-dark" name="imgid" value="<?php echo $_GET['id']?>" >
                                      <input type="file" class="btn btn-dark" name="img" ><br>
                                      <textarea rows=3 type="text" name="img_text" placeholder="Image title..." style="width:100%; border-radius:5px;"><?php echo $row['img_text']?></textarea>
                                      <button type="submit" name="upload" class="btn btn-rounded  btn-success mb-2" >Update Image</button><br>
                                     </form>
                                      <img id="img" src="<?php echo '../../img/'.$row['img']?>" alt="French Village">
                                                    <?php } ?>
                               </div>
                             </div>
                            </div>
                        </div>
                               </div>
                    
                          
                          </div>
                  <div>
    	 
            	</div>
                          <!-- main content area end -->
   

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