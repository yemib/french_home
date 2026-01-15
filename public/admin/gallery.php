<?php  include 'server.php';
   if ($_SESSION['email']) :
    include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
 ?>
 <?php
if(isset($_POST['update2'])){
    $img_text2 = $_POST['img_text2'];
    $img_textid = $_POST['img_textid'];
    
    $update2 = mysqli_query($db, "UPDATE gallery SET img_text = '$img_text2' where id = '$img_textid' ");
    // die(mysqli_error($db));
   if($update2){
        echo "<script type='text/javascript'>
	alert('Successfully Updated');
</script>";
    }else{
        echo "<script type='text/javascript'>
	alert('Not Successfully');
</script>";
    }

}
?>
 <style type="text/css">
	#img{
		width: 460px;
		height: auto;
	}
</style>
<script>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
  output.style.width = '600px';
  output.style.height = 'auto';
  output.style.display = block;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>

 <style type="text/css">
    #img_div{
    width: 640px;
    padding: 5px;
    margin: 15px auto;
    border-radius: 5px;
    border: 1px solid #cbcbcb;
  }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   #imgr{
    float: left;
    margin: 5px;
    width: 600px;
    height: 400px;
    border-radius: 5px;
   }
   #up{
    text-transform: ;
   }
                              </style> 

<?php


// Initialize message variable
$msg = "";
$img="";
// If upload button is clicked ...
if (isset($_POST['upload'])) {
  // Get image name
  $img = $_FILES['img']['name'];
  // Get text
  $img_text = mysqli_real_escape_string($db, $_POST['img_text']);

  // image file directory
  $targett = "../img/".basename($img);

  $sql = "INSERT INTO gallery (img, img_text) VALUES ('$img', '$img_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result = mysqli_query($db, "SELECT * FROM gallery");
$rt = mysqli_query($db, "DELETE * FROM gallery");
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
          <h1>Gallery</h1>

          <div class="main-content">
           
             <div class="row">
                        <div class="card">
                              <div style="padding:10px">
                              <form method="POST" action="gallery.php" enctype="multipart/form-data" >
                                <input type="hidden" name="size" value="1000">
                              <input type="file" class="btn btn-dark" onchange="preview_image(event)" name="img" >
                              <input type="text" class="btn btn-light" id="output_image2" class="form-control" name="img_text" placeholder="Image title..." >
                              <button type="submit" name="upload" class="btn btn-rounded  btn-success mb-2" >Post</button><br>
                              <img id="output_image"  width="400" height=""  style="padding-top: 10px; border-radius: 10px; max-width: 100%; height: auto;">
                            </form>
                           </div>
                         </div>
           </div>
           <script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/delgalleryprocess.php?id= '+$id+' ';
               return true
      }
  </script>
  <table class="table table-bordered">
      <thead class="thead-dark" align="center">
      <th>S/N</th>
    <th>Title</th>
    <th colspan="3">Action</th>
    </thead>
<?php 

 
  // sql delete query
 $sql = "DELETE FROM `gallery` WHERE `gallery`.`id` = '' ";
 $rw = mysqli_query($db, $sql);
 
?>
                <div class="row">
                    <!-- data table start -->
                    <div class="col-9 mt-4">
              
                                   <?php
                                   $c = 1;
while ($row = mysqli_fetch_array($result)) {
                                      $id = $row['id'];   
                
?>

  <tr>
      <td><?php echo $c ++ ?></td>
    <td><?php   echo "<h5 id=up>".$row['img_text'] . '</h5>';?></td>
    <td><a onclick="ConfirmDelete(<?php echo $id;?>)"  class='btn btn-danger'> Delete </a></td>
    <!--<td><a href="editpic.php?id=<?php echo $id?>"  class='btn btn-success'>Edit</a>-->
    <td><a data-toggle="modal" data-target="#viewModalEdit<?php echo $id?>"  class='btn btn-success'>Edit</a></td>
    <td><a data-toggle="modal" data-target="#viewModal<?php echo $id?>"  class='btn btn-primary'>View</a></td>
  </tr>
  
   <!--View Modal -->
<div class="modal fade" id="viewModal<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="viewModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b></b><?php echo $row['img_text']?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="modal-dialog modal-lg">
          <span id="img_id">
          <div class="fetched-data"></div>
       <img id="img" src="<?php echo '../../img/'.$row['img']?>" alt="French Village">
      </div></div>
    </div>
  </div>
</div>   


<!--Edit Modal -->
<div class="modal fade" id="viewModalEdit<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="viewModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b></b>Update Image Title<?php echo $row['img_text']?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form method="post" action="gallery.php">
                <input type="hidden" name="img_textid" value="<?php echo $id?>">
               <textarea style="width:100%; height:100%" name="img_text2" class="form-control"><?php echo $row['img_text']?></textarea>
              <!--    <div class="modal-dialog modal">-->
              <!--    <span id="img_id">-->
              <!--  <textarea style="width:100%; height:100%" class="form-control"><?php echo $row['img_text']?></textarea>-->
              <!--    <div class="fetched-data"></div>-->
               <!--<img id="img" src="<?php echo '../../img/'.$row['img']?>" alt="French Village">-->
              <!--</div>-->
     </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit" name="update2">Update</button>
              </div>
          </form>
    </div>
  </div>
</div>   
<?php
    }
  ?> 
</table>

 

                                   </div>
                               </div>
                    
                          
                          </div>
                  <div>
    	 
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