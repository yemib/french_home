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
                            <div class="box">
          <!-- Box Head -->
          <div class="box-head">

<style type="text/css">
	#imgt{

		margin-left: auto;
		margin-right: auto;
	}
</style>
			<!-- End banner Area -->
								<?php
//while ($row = mysqli_fetch_array($result)) {


		?>
									<div class="feature-img">

									</div>
								</div>
                                <?php
								$id = $_GET['id'];
          	                  $select = "SELECT * FROM blog WHERE id=$id";
          	                  $result = $db->query($select);
          	                   // if ($result->num_rows>0){
          	                            //$rows = $result->num_rows;
                                            while($rows=$result->fetch_assoc()){
                                         		$idd = $rows['id'];
                                         		$title = $rows['title'];
                                         		$content = $rows['content'];
                                         		$img = $rows['img'];
                                         		//echo $title."<br>" ;
          			          ?>
								<div class="quotes">
                                    <form method="post" action="events/editblogprocess.php">
									<textarea class="form-control" name="title" style="text-align: center;"><?php echo $rows['title'];?></textarea>
										<p><div style="text-align: center"><input type="file" name="" value="<?php echo "<img src='../french village/img/".$rows['img']."' />";?>"></div></p>
									<textarea name="content" class="form-control" rows="8" cols="80"><?php echo $rows['content'];}?></textarea>
                                    <input type="hidden" name="blog_id" value="<?php echo $idd?>">
                                    <div class="text-right"><input type="submit" class="btn btn-rounded  btn-success mb-2" value ="Update"></div></form></div>
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