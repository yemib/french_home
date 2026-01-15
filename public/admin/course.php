<?php include "server.php";
  if ($_SESSION['email']) :
    include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  ?>
 <div id="wrapper">

      <!-- Sidebar -->
      <?php include_once 'sidebar.php';
$query = mysqli_query($db, "SELECT * FROM departments");
$query2 = mysqli_query($db, "SELECT * FROM programme");
$query3 = mysqli_query($db, "SELECT * FROM preuniversity");
$query4 = mysqli_query($db, "SELECT * FROM postgraduate");
$query5 = mysqli_query($db, "SELECT * FROM intensive");


      ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Update Pages</li>
          </ol>
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
           
                                <h3 class="header-title">Department</h3>
                              
                                                          <?php
            while ($row = mysqli_fetch_assoc($query)) {
                                        $name = $row['name'];
                              
        ?> 
                                   <h5> <?php echo $name;}?><br></h5>
                                   <p class="text-right"><a href="adddept.php" class="btn btn-success mb-3" style="color: black;">Add</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="deldept.php" class="btn btn-danger mb-3" style="color: black;">Delete</a></p>
                             </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                    <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Programms</h4>
                                <?php
            while ($row2 = mysqli_fetch_assoc($query2)) {
                                        $name2 = $row2['name'];
                              
        ?> 
                                   <h5> <?php echo $name2;}?><br></h5>
                               <p class="text-right"><a href="addprog.php" class="btn btn-success mb-3" style="color: black;">Add</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="delprog.php" class="btn btn-danger mb-3" style="color: black;">Delete</a></p>
                             </div>
                            </div>
                        </div>
                    </div><div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Pre-University Program</h4>
                                <?php
            while ($row3 = mysqli_fetch_assoc($query3)) {
                                        $name3 = $row3['name'];
                              
        ?> 
                                   <h5> <?php echo $name3;}?><br></h5>
                               <p class="text-right"><a href="addpre.php" class="btn btn-success mb-3" style="color: black;">Add</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="delpre.php" class="btn btn-danger mb-3" style="color: black;">Delete</a></p>
                             </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Post Graduate Program</h4>
                                    <?php
            while ($row4 = mysqli_fetch_assoc($query4)) {
                                        $name4 = $row4['name'];
                              
        ?> 
                                   <h5> <?php echo $name4;}?><br></h5>
                                   <p class="text-right"><a href="addpost.php" class="btn btn-success mb-3" style="color: black;">Add</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="delpost.php" class="btn btn-danger mb-3" style="color: black;">Delete</a></p>
                                 </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Intensive French Programmes For</h4>
                                        <?php
            while ($row5 = mysqli_fetch_assoc($query5)) {
                                        $name5 = $row5['name'];
                              
        ?> 
                                   <h5> <?php echo $name5;}?><br></h5>
                                       <p class="text-right"><a href="addint.php" class="btn btn-success mb-3" style="color: black;">Add</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="delint.php" class="btn btn-danger mb-3" style="color: black;">Delete</a></p>
                                     </div>
                                    
                                    </div>
                                </div>

                    </div>

                </div>
            </div>

        <!-- main content area end -->



        <!-- footer area start-->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2019 French Village Nigeria</span>
            </div>
          </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

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