<?php   include 'server.php';
 if ($_SESSION['email']) :  
    include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
if (isset($_POST['uploadpics'])) {
  // Get image name
  $img = $_FILES['img']['name'];
  // Get text
    $img_id = $_POST['img_id'];

  // image file directory
  $targett = "../img/".basename($img);

  $sql = "UPDATE staff SET img ='$img' where id = '$img_id'";
  // execute query
  $uploadpicsresult = mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
   //die(mysqli_error($db));
  if($uploadpicsresult){
      echo "<script type='text/javascript'>
	alert('Successfully Updated');
</script>";
header("location:fetchstaff.php");
  }else{
        echo "<script type='text/javascript'>
	alert('Not Successfully');
</script>";
    }
}
?>
  <?php
$result = mysqli_query($db, "SELECT * FROM staff ORDER BY name asc");?>
<?php
$res = ("SELECT * FROM staff");
$resu=mysqli_query($db, $res);
$rw=mysqli_fetch_assoc($resu);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $acad_qualification = $_POST['acad_qualification'];
    $area_of_specs = $_POST['area_of_specs'];
    $office_address = $_POST['office_address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];
    
    $update = mysqli_query($db, "UPDATE staff SET name = '$name', designation = '$designation', acad_qualification = '$acad_qualification',
    area_of_specs = '$area_of_specs', office_address = '$office_address', email = '$email', phone = '$phone' where id = '$id' ");
    //die(mysqli_error($db));
   if($update){
        echo "<script type='text/javascript'>
	alert('Successfully Updated');
</script>";
header("location:fetchstaff.php");
    }else{
        echo "<script type='text/javascript'>
	alert('Not Successfully');
</script>";
    }

}

?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable();
} );

      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/delstaff.php?id= '+$id+' ';
               return true
      }
  </script>
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
            <li class="breadcrumb-item active">All Staff</li>
          </ol>

          <!-- Page Content -->
          <h1>Staffs</h1>

          <div class="main-content">





<!--  <div class="text-right">-->
<!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart">Add FAQ</button>-->

<!-- Modal: modalCart -->
<!--<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
<!--  aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
      <!--Header-->
<!--      <div class="modal-header">-->
<!--        <h4 class="modal-title" id="myModalLabel">Add FAQ</h4>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">×</span>-->
<!--        </button>-->
<!--      </div>-->
      <!--Body-->
<!--               <div class="modal-body">-->
<!--            <form method="post" action="faq.php">-->

<!--             <p><div class="text-left"><label>Question</label></div>-->
<!--             <input type="text" class="form-control" name="question" required=""></p>-->
<!--             <div class="text-left"><label>Answer</label></div>-->
<!--             <textarea class="form-control" type="text" name="answer" required=""></textarea>-->

<!--             </div>-->
      <!--Footer-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>-->
<!--        <button type="submit" name="post" value="post" class="btn btn-success">Add</button>-->
<!--        </form>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--</div>-->
      <div class="row">

        <!-- data table start -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    
                    <div class="table-responsive">
                         <table class="table" id="table_id">
                                <thead>
                                  <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Academic Qualification</th>
                                    <!--<th>Area of Specification</th>-->
                                    <!--<th>Office Address</th>-->
                                    <!--<th>Email</th>-->
                                    <th>Phone</th>
                                    <th class="ac" colspan="4" align="center">Modify</th>
                                  </tr>
                                </thead>
                                  <?php
                                  $counter = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    ?> <?php $id = $row['id'];?>
                            <tbody>
                              <tr>
                                <td><?php echo $counter;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['designation'];?></td>
                                <td><?php echo $row['acad_qualification'];?></td>
                                <!--<td><?php echo $row['area_of_specs'];?></td>-->
                                <!--<td><?php echo $row['office_address'];?></td>-->
                                <!--<td><?php echo $row['email'];?></td>-->
                                <td><?php echo $row['phone'];?></td>
                                <td><a onclick="ConfirmDelete(<?php echo $id;?>)" class='btn btn-danger'>Delete </a><br></td>
                                <td><a  class='btn btn-success' data-toggle="modal" data-target="#EditModal1<?php echo $id?>">Edit </a><br></td>
                                <td><a  class='btn btn-primary' data-toggle="modal" data-target="#UploadpicsModal1<?php echo $id?>">Upload Pic</a><br></td>
                                <td><a class='btn btn-success' data-toggle="modal" data-target="#ViewModal1<?php echo $id?>">View </a></td>
                              </tr>
                             </tbody> 
                              <!--Edit Modal-->
                              <div class="modal fade " id="EditModal1<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <!--Header-->
                                      <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel"><?php echo $row['name'];?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                       </div>
                                            <div class="modal-body">
                                                <form method="post" action="fetchstaff.php">
                                                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>" />
                                                 <p><div class="text-left"><label>Name</label></div>
                                                 <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" /></p>
                                                 <p><div class="text-left"><label>Designation</label></div>
                                                 <input type="text" class="form-control" name="designation" value="<?php echo $row['designation'];?>" /></p>
                                                 <div class="text-left"><label>Academic Qualification</label></div>
                                                 <textarea class="form-control" name="acad_qualification" ><?php echo $row['acad_qualification'];?></textarea>
                                                 <div class="text-left"><label>Area of Specification</label></div>
                                                 <textarea class="form-control" name="area_of_specs" ><?php echo $row['area_of_specs'];?></textarea>
                                                 <div class="text-left"><label>Office Address</label></div>
                                                 <textarea class="form-control" name="office_address" ><?php echo $row['office_address'];?></textarea>
                                                  <div class="text-left"><label>Email</label></div>
                                                 <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" /></p>
                                                  <div class="text-left"><label>Phone</label></div>
                                                 <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'];?>" /></p>
                                    
                                            </div>
                                                  <!--Footer-->
                                                  <div class="modal-footer">
                                                    <input type="submit" name="update" value="Update" value="" class="btn btn-success"></input>
                                                    <input type="hidden" name="faq_id" value="<?php echo $id ?>">
                                                </form>
                                
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <!--View Modal-->
                                    <div class="modal fade bd-example-modal-lg" id="ViewModal1<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <!--Header-->
                                      <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel" align="center"><?php echo $row['name'];?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                       </div>
                                            <div class="modal-body">
                                               <div class="row">
                                                    <div class="col-sm-4">
                                                       <span id="img_id"> <img id="img" src="<?php echo '../../img/'.$row['img']?>" alt="<?php echo $row['name'];?>" style="width:265px; height:auto;"></span>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label>Designation</label><br>
                                                        <span style="font-family:cursive"><?php echo $row['designamenation'];?></span><br>
                                                         <label>Academic Qualification</label><br>
                                                        <span style="font-family:cursive"><?php echo $row['acad_qualification'];?></span><br>
                                                        <label>Area of Specification</label><br>
                                                        <span style="font-family:cursive"><?php echo $row['acad_qualification'];?></span><br>
                                                        <label>Office Address</label><br>
                                                        <span style="font-family:cursive"><?php echo $row['office_address'];?></span><br>
                                                        <label>Contact</label><br>
                                                        <span style="font-family:cursive"><?php echo $row['email'];?></span><br>
                                                        <label>Phone</label><br>
                                                        <span style="font-family:cursive"><?php echo $row['phone'];?></span><br>
                                                    </div>
                                                </div>
                                                                                    
                                            </div>
                                                </form>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <!--UPLOADPICS Modal-->
                                    <div class="modal fad" id="UploadpicsModal1<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <!--Header-->
                                           <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel"><?php echo $row['name'];?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                           </div>
                                            <div class="modal-body">
                                              <div style="padding:10px">
                                              <form method="POST" action="fetchstaff.php" enctype="multipart/form-data" >
                                                <input type="hidden" name="size" value="1000">
                                                <input type="hidden" name="img_id" value="<?php echo $id?>">
                                              <input type="file" class="btn btn-dark" onchange="preview_image(event)" name="img" >
                                              <!--<input type="text" class="btn btn-light" id="output_image2" class="form-control" name="img_text" placeholder="Image title..." >-->
                                              <button type="submit" name="uploadpics" class="btn btn-rounded  btn-success mb-2" >Post</button><br>
                                              <img id="output_image"  width="400" height=""  style="padding-top: 10px; border-radius: 10px; max-width: 100%; height: auto;">
                                            </form>
                                           </div>
                                           </div>
                                      </div>
                                    </div>
    
                                <?php $counter++;
                                }?>
                            </table>


                              </div>
                            </div>
                          </div>
                        </div>


<!-- Button trigger modal-->

<!-- Modal: modalCart -->
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







    
</div>
<?php include_once 'footer_admin.php';?>
<?php else :?>
<?php  header("location: ../new french village/loginadmin.php");?>
<?php endif;?>