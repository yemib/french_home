<?php include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  include 'server.php';
if ($_SESSION['email']) :
$img = "";
        if(isset($_POST['post'])){
            $text = $_POST['text'];
            
            $update2 = mysqli_query($db, "UPDATE work SET name = '$text' where id = '1' ");
            //die(mysqli_error($db));
           if($update2){
                echo "<script type='text/javascript'>
        	alert('Title Successfully Updated');
        </script>";
            }else{
                echo "<script type='text/javascript'>
        	alert('Not Successfully');
        </script>";
            }
        
        }
        $result = mysqli_query($db, "SELECT * FROM work where id = 1");
        $fetch = mysqli_fetch_assoc($result);
     if(isset($_POST['delete'])){
     $text = $_POST['text'];
      $querydel = mysqli_query($db, "UPDATE work SET name = NULL WHERE id = 1");
      header("location:work.php");
         }

    # code...
?>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mdbhen93qj2j6e6naaqesoftancsivl5mdflrjf8fqyd38w1"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/delacad.php?id= '+$id+' ';
               return true
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
            <li class="breadcrumb-item active">Works and Services</li>
          </ol>

          <!-- Page Content -->
          <h1>Works and Services</h1>

          <div class="main-content">

                <!-- row area end -->
                         <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Works and Services Staffs</h2>
            <!--<div class="text-right">-->
            <!--<botton class="btn btn-success" data-toggle="modal" data-target="#StaffModal">Add New Staff</botton>-->
            <!--</div>-->
                
          <!-- End Box Head -->
                <form method="post" action="work.php">
                   <textarea rows="20" name="text"><?php echo $fetch['name']; ?></textarea>
                     <div class="text-right">
                     <button type="submit" name='post' class="btn btn-rounded  btn-success mb-2">Update</button></form>&nbsp&nbsp
                <form method="post" action="work.php">
                <button type="submit" name="delete" class="btn btn-rounded  btn-danger mb-2">Delete</button>
                </form></div>
        </div>
        <!-- End Box -->
                        </div>
                        
                    </div>
                    
                </div>
                  
              </div>
                <!-- row area end -->
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
    
     <!-- ADD NEW STAFF Modal-->
    <!--<div class="modal fade" id="StaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
    <!--  <div class="modal-dialog" role="document">-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-header">-->
    <!--        <h5 class="modal-title" id="exampleModalLabel">Add New Staff</h5>-->
    <!--        <button class="close" type="button" data-dismiss="modal" aria-label="Close">-->
    <!--          <span aria-hidden="true">×</span>-->
    <!--        </button>-->
    <!--      </div>-->
    <!--    <form method="post" action="acad.php">-->
    <!--      <div class="modal-body">-->
    <!--          <label>Name</label>-->
    <!--          <input type="text" name="name" class="form-control">-->
    <!--          <label>Designation</label>-->
    <!--          <input type="text" name="desig" class="form-control">-->
    <!--      </div>-->
    <!--      <div class="modal-footer">-->
    <!--        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>-->
    <!--        <button class="btn btn-success" type="submit" name="add">Add</button>-->
    <!--      </div>-->
    <!--     </form>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
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
<?php  header('location: ../loginadmin.php')?>
<?php endif;?>