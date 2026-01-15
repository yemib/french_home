<?php  include_once 'server.php';?>
      <?php    if (isset($_SESSION['email'])) {
               
  include_once 'header_admin.php';?>
 
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
          <div class="card-register mx-auto mt-5">
          <div class="box-head">
            <h2 class="" style="text-align: center;">Welcome</h2>
               
          <!-- End Box Head -->
          <!-- Table -->
         
               <?php
                while ($row2 = mysqli_fetch_array($result)) {
                    $id = $row2['id'];?>
             
                <h1 style="font-family: cursive; font-weight: 900;  text-transform: uppercase; color: black; font-size: 40px; text-align: center;"><?php echo $row2['f_name'] . '&nbsp&nbsp' . $row2['l_name'];}?></h1>

               
          </div>
        </div>
          <!-- Table -->
        </div>
        <!-- End Box -->
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
