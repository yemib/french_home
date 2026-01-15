<?php 
include 'server.php';
 if ($_SESSION['email']) :
  include 'header_admin.php';
include_once 'nav.php';

//$result = mysqli_query($db, "SELECT * FROM blog ORDER BY id DESC");
//$id = $_GET['id'];
/*if (isset($_POST['post'])) {


  $author_name = mysqli_real_escape_string($db, $_POST['author_name']);
  $author_email = mysqli_real_escape_string($db, $_POST['author_email']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

$query = "INSERT INTO blog (title, content, img)
          VALUES('$title', '$content', '$img')";
    mysqli_query($db, $query);
}*/
//$result = mysqli_query($db, "SELECT * FROM blog");?>

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
          	<h1>Update Blog</h1>
          	<div class="main-content">

                <!-- row area end -->
                         <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="col-4 mt-4">
          <ul >
            
            <li class="nav-item active">
              <a class="nav-link" href="sb.php">
               Student Brochure
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="va.php">
                Village Anthem
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="tr.php">
                Teaching Resources
              </a>
            </li>
          </ul>  
        </div>
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