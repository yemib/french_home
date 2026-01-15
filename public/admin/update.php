
  <?php include 'server.php'; 

 if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
?>
  
    <?php include 'logoutmodal.php';?>
<script src="js/modernizr-2.8.3.min.js"></script>
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
          <h1>Update Page</h1>

          <hr>

          <div class="col-3 mt-4">
          <ul>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">
                About
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="course.php">
                Courses
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">
                Contact
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="event.php">
                Events
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="gallery.php">
                Gallery
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="faq.php">
                FAQ
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="rmv.php">
                Resource Materials
              </a>
            </li>
            <!--<li class="nav-item active">-->
            <!--  <a class="nav-link" href="ds.php">-->
            <!--    Director's Speech-->
            <!--  </a>-->
            <!--</li>-->
          </ul>  
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
<?php  echo "<script>window.location='../loginadmin.php'</script>";?>
<?php endif;?>