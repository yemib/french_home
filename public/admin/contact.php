<?php include_once 'server.php';
if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';?>
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
          <h1>Contact Page</h1>

          <div class="main-content">

                <!-- row area end -->
                <?php
                $sql="SELECT * FROM contact WHERE id=1";
                $result=mysqli_query($db, $sql);
                $rows=mysqli_fetch_array($result);
                ?>
               <div class="row">
                    <!-- data table start -->
                    <div class="col-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Address</h4>
                                <form method="post" action="events/addressprocess.php">
                               <textarea class="col-12" name = "address" style="height: 250px; box-shadow: 0px 0px 0px 0px:
                               color: rgba(221, 63, 141, 0.22); border-radius: 10px"><?php echo $rows['address']; ?></textarea>
                             <div class="text-right"><input type="submit" class="btn btn-rounded  btn-success mb-2" value ="Update"></input></div></form></div>
                            </div>
                        </div>

                    <!-- data table end -->

                    <!-- data table start -->
                    <div class="col-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Phone Number</h4>
                                <form method="post" action="events/phoneprocess.php">
                                <textarea class="col-12" name = "phone" style="height: 250px; border-radius: 10px"><?php echo $rows['phone_number']; ?></textarea>
                             <div class="text-right"><input type="submit" value = "Update" class="btn btn-rounded  btn-success mb-2"></input></div></form></div>
                            </div>
                        </div>

                    <!-- data table start -->
                    <div class="col-4 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Email Address</h4>
                                <form method="post" action="events/emailprocess.php">
                                <textarea class="col-12" name = "email" style="height: 250px; box-shadow: 0px 0px 0px 0px:
                               color: rgba(221, 63, 141, 0.22); border-radius: 10px"><?php echo $rows['email']; ?></textarea>
                             <div class="text-right"><input type="submit" value = "Update" class="btn btn-rounded  btn-success mb-2"></input></div></form></div>
                            </div>
                        </div>
                    </div>

                </div>
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