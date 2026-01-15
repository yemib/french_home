<?php include "header_admin.php"?>
  <?php include_once 'nav.php';
  include 'server.php';
  error_reporting(E_ALL);
  error_reporting(E_ALL & ~E_NOTICE);
if ($_SESSION['email']) :
$img = "";

if (isset($_POST['post'])) {


  $title = mysqli_real_escape_string($db, $_POST['title']);  
  $content = mysqli_real_escape_string($db, $_POST['content']);  
  $img = $_FILES['img']['name'];

  $target = "../img/".basename($img);

$query = "INSERT INTO event (title, content, img, time_post) 
          VALUES('$title', '$content', '$img', SYSDATE())";
    mysqli_query($db, $query);

      if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
  
    die(mysqli_error($db));
  }
$result = mysqli_query($db, "SELECT * FROM event");?>
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
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mdbhen93qj2j6e6naaqesoftancsivl5mdflrjf8fqyd38w1"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<?php
if(isset($_POST['delete'])){
  $del = $_POST['todel'];


    $check = mysqli_query($db, "SELECT * FROM event WHERE id = '$del' ");
    if (mysqli_num_rows($check)>0) {
      # code...
      $querydel = mysqli_query($db, "DELETE FROM event WHERE id = '$del'");
    }
    }
    # code...
?>
<script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/deleventprocess.php?id= '+$id+' ';
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
          <h1>Event Page</h1>

          <div class="main-content">

                <!-- row area end -->
                         <div class="row">
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Event</h2>
                
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th>Title</th>
                <th>Date</th>
                <th width="20" class="ac" colspan="2">Modify</th>
                <th></th>
              </tr>
              <?php
while ($row = mysqli_fetch_array($result)) {
  $id = $row['id'];?>
              <tr>
                <td><h5><?php echo $row['title'];?></h5></td>
                <td><?php echo $row['time_post'];?></td>
                <td><a onclick="ConfirmDelete(<?php echo $id;?>)" class="btn btn-danger"> Delete </a></td>
                <td><?php echo "<a href='editevent.php?id=$id' class='btn btn-success'>Edit</a>";}?></td>
              </tr>
              
              
            </table>
            <!-- Pagging -->
           
            <!-- End Pagging -->
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
            <h2>Add New Event</h2>
          </div>
          <!-- End Box Head -->
          <form action="event.php" method="post" enctype="multipart/form-data">
            <!-- Form -->
            <div class="form">
                <p><label>Title</label><input type="text" class="form-control" name="title" style="width: 100%;"></p>

             <p><label>Content</label><br>
    
                <textarea name="content" class="textarea" rows="15" cols="120"></textarea></p>
                 <div class="result">
             <!--<textarea name="" id="area_editor"></textarea>-->
            </div>
            <div class="form-group">
                   <label>Attach image </label>
                   <input type="hidden"  name="size" value="1000">
                   <input type="file" name="img" onchange="preview_image(event)" class="btn btn-dark" />
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

<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>
<!--<link rel="stylesheet" href="build/jodit.min.css"/>-->
<!--<link rel="stylesheet" href="assets/app.css"/>-->
<!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i" rel="stylesheet">-->

<!--<script src="build/jodit.min.js"></script>-->
<!--<script src="assets/prism.js"></script>-->
<!--<script src="assets/app.js"></script>-->
<!--<script>-->
<!--    var editor = new Jodit('#area_editor', {-->
<!--        textIcons: false,-->
<!--        iframe: false,-->
<!--        iframeStyle: '*,.jodit_wysiwyg {color:red;}',-->
<!--        height: 300,-->
<!--        defaultMode: Jodit.MODE_WYSIWYG,-->
<!--        observer: {-->
<!--            timeout: 100-->
<!--        },-->
<!--        uploader: {-->
<!--            url: 'https://xdsoft.net/jodit/connector/index.php?action=fileUpload'-->
<!--        },-->
<!--        filebrowser: {-->
            // buttons: ['list', 'tiles', 'sort'],
<!--            ajax: {-->
<!--                url: 'https://xdsoft.net/jodit/connector/index.php'-->
<!--            }-->
<!--        },-->
<!--        commandToHotkeys: {-->
<!--            'openreplacedialog': 'ctrl+p'-->
<!--        }-->
        // buttons: ['symbol'],
        // disablePlugins: 'hotkeys,mobile'
<!--    });-->
<!--</script>-->

<?php include_once 'footer_admin.php';?>