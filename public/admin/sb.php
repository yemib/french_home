<?php 
include 'server.php';
 if ($_SESSION['email']) :
  include 'header_admin.php';
include_once 'nav.php';

   
$sql="SELECT * FROM student_brochure WHERE id=1";
$result=mysqli_query($db, $sql);
$rows=mysqli_fetch_array($result);
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
          	<h1>Update Student Brochure</h1>
          	<div class="main-content">

                <!-- row area end -->
                         <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                    <form method="post" action="events/sb.php">
            <!-- Form -->
            <div class="form">
              <label>Preview&nbsp(151 characters)</label>
               <textarea name="preview" class="form-control" rows="3" cols="120"><?php echo $rows['preview']; ?></textarea></p>
               <label>Content</label>
                <textarea name="content" class="form-control" rows="15" cols="120"><?php echo $rows['content']; ?></textarea></p>
            </div>            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="submit" name="post" class="btn btn-success" value="Update" />
            </div>
            <!-- End Form Buttons -->
          </form>
							</div>

						</div>

			<!-- End post-content Area -->
		</div>
	</div>
</div>
</div>
</div>
</div>
 <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2019 French Village Nigeria</span>
            </div>
          </div>
        </footer>
			<?php include 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>