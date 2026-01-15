<?php include 'server.php';
if ($_SESSION['email']) :
 include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
  
$img = "";

if (isset($_POST['post'])) {


  $title = mysqli_real_escape_string($db, $_POST['title']);
  $editor_content = mysqli_real_escape_string($db, $_POST['editor_content']);
  $img = $_FILES['img']['name'];

  $target = "img/".basename($img);
  $targett = "../french village/img/".basename($img);

$query = "INSERT INTO blog (title, content, img, time_post)
          VALUES('$title', '$editor_content', '$img', SYSDATE())";
    mysqli_query($db, $query);

    if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
  }
$result = mysqli_query($db, "SELECT * FROM blog");?>
<script>
function preview_image(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
  output.style.width = '600px';
  output.style.height = '400px';
  output.style.display = block;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
 <link rel="stylesheet" href="../dist/summernote-bs4.css">
  <script type="text/javascript" src="../dist/summernote-bs4.js"></script>

<script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/delblogprocess.php?id= '+$id+' ';
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
            <li class="breadcrumb-item active">Update Pages</li>
          </ol>

          <!-- Page Content -->
          <h1>Blog</h1>
          <div class="main-content">

                <!-- row area end -->
                         <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Post</h2>
                <div class="col-md-6 col-sm-8 clearfix">
                         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!--<div class="input-group">
          <input type="text" class="form-control" placeholder="Search for blog" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
      </div>-->
      </form>
            </div>
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>Title</th>
                <th>Date Posted</th>
                <th width="20" class="ac">Modify</th>
                <th></th>
              </tr>
              <?php
while ($row = mysqli_fetch_array($result)) {
     $id = $row['id'];?>
              <tr>
                <td><h5><?php echo $row['title'];?></h5></td>

                <td><?php echo $row['time_post'];?></td>
                <td><a onclick="ConfirmDelete(<?php echo $id;?>)" class='btn btn-danger'> Delete </a></td>
                <td><?php echo "<a href='editblog.php?id=$id' class='btn btn-success'>Edit</a>";}?></td>
              </tr>


            </table>
           
          </div>
          <!-- Table -->
        </div>
        <!-- End Box -->
                        </div>

                    </div>

                </div>

              </div>
                <!-- row area end -->
             </div>

   <div class="row">
         <div class="col-12 mt-4">
                <div class="card">
                            <div class="card-body">
                        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Article</h2>
          </div>
          <!-- End Box Head -->
          <form action="blog.php" method="post" enctype="multipart/form-data">
            <!-- Form -->
            <div class="form">
                <p><label>Article Title <span>(Required Field)</span></label></p>

                <p><input type="text"  class="form-control" name="title" style="width: 865px;"></p>
   <p><label>Content <span>(Required Field)</span></label><br>
                <input type="hidden" name="editor_content">

                <div id="editor" required="" style="height: 300px">
                </div>
                

               
            </p>
            </div>
            <div class="form-group">
                   <label>Attach image </label>
                   <input type="file" name="img" class="btn btn-dark" />
                                        </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="submit" name="post" class="btn btn-success" value="Publish" />
            </div>
            <!-- End Form Buttons -->
          </form>
        </div>
        <!-- End Box -->
      </div>
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