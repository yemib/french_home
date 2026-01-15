<?php include 'header_admin.php';
include_once 'nav.php';
include 'server.php';
 if ($_SESSION['email']) :
if(isset($_POST['update'])){
    $title =  $_POST['title'];
    $id1 =  $_POST['event_id'];
    $content = $_POST['content'];
$sql = "UPDATE event SET title = '$title', content = '$content' WHERE id = '$id1'";
$result2 = $db->query($sql);
// die ($sql);
     if ($result2 == true){
     	echo "<script type='text/javascript'>
    	alert('Successfully Updated');
        </script>";
        header("location:event.php");
     }
     else{
     echo "<script type='text/javascript'>
    	alert('Not Successfully');
          </script>";
     }
}
?>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mdbhen93qj2j6e6naaqesoftancsivl5mdflrjf8fqyd38w1"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
          	                  $select = "SELECT * FROM event WHERE id=$id";
          	                  $result = $db->query($select);
                                            while($rows=$result->fetch_assoc()){
                                         		$idd = $rows['id'];
                                         		$title = $rows['title'];
                                         		$content = $rows['content'];
                                         		$img = $rows['img'];
                                         		//echo $title."<br>" ;
          			          ?>
                                    <form method="post" action="editevent.php">
									<input  class="form-control" name="title" value="<?php echo $rows['title'];?>" style="margin: 7px">
										<div style="text-align: center"><?php echo "<img  class=img-fluid src='img/".$rows['img']."' />";?><br>
             <!--       <form method="post" action="editphoto.php" enctype="multipart/form-data">-->
             <!--         <input type="hidden" class="form-control" name="staff_id" value="<?php echo $idd;?>"><br>-->
             <!--<input type="file" name="img" class="form-control">-->
             <!--             <button class="btn btn-success" type="submit" name="upload">Upload</button>                           -->
                                 <!-- <input aria-describedby="basic-addon2 type="text" name="title"> -->
             <!--                    </form>-->
                               </div>
									<textarea name="content" class="textarea" rows="15" cols="120"><?php echo $rows['content'];}?></textarea>
                                    <input type="hidden" name="event_id" value="<?php echo $idd?>">
                                    <div class="text-right"><input type="submit" name="update" class="btn btn-rounded  btn-success mb-2" value ="update">
                                    </div>
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
			<!-- End post-content Area -->
			<?php include 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>