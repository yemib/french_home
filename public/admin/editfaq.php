<?php include 'header_admin.php';
include_once 'nav.php';
include 'server.php';
 if ($_SESSION['email']) :

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

                <!-- row area 
					<div class="row">
						<div class="col-lg-10 posts-list" style="align-self: center; margin-left: 50px">
							<div class="single-post row">
								<div class="col-lg-12">-->
								<?php
//while ($row = mysqli_fetch_array($result)) {


		?>
									<div class="feature-img">

									</div>
								</div>
                                <?php
								$id = $_GET['id'];
          	                  $select = "SELECT * FROM faq WHERE id=$id";
          	                  $result = $db->query($select);
          	                   // if ($result->num_rows>0){
          	                            //$rows = $result->num_rows;
                                            while($rows=$result->fetch_assoc()){
                                         		$idd = $rows['id'];
                                         		$question = $rows['question'];
                                         		$answer = $rows['answer'];

          			          ?>
                                    <form class="form" method="post" action="events/editfaqprocess.php">
                                    	<div class="form-group">
									<textarea class="form-control" class="mt-20 mb-20" name="question" style="text-align: center;"><?php echo $rows['question'];?></textarea></div>
									<div class="form-group">
									<textarea class="form-control" name="answer" rows="8" cols="80"><?php echo $rows['answer'];}?></textarea></div>
                                    <input type="hidden" name="faq_id" value="<?php echo $idd?>">
                                    <div class="text-right"><input type="submit" class="btn btn-rounded  btn-success mb-2" value ="Update">
                                    </div>
                                </form>
                                   </div>

							</div>

						</div>

			</section>
			<!-- End post-content Area -->
			<?php include 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>