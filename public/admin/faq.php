<?php   include 'server.php';
  
    include_once 'header_admin.php';?>
  <?php include_once 'nav.php';
 if ($_SESSION['email']) :
?>

<?php
$id = "";
$question = "";
$answer = "";

  if (isset($_POST['post'])) {


  $question = mysqli_real_escape_string($db, $_POST['question']);
  $answer = mysqli_real_escape_string($db, $_POST['answer']);


  $query = "INSERT INTO faq (question, answer)
            VALUES('$question', '$answer')";
      mysqli_query($db, $query);
  }?>

  <?php
$result = mysqli_query($db, "SELECT * FROM faq");?>
<?php
$res = ("SELECT * FROM faq");
$resu=mysqli_query($db, $res);
$rw=mysqli_fetch_assoc($resu);



?>



<script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/delfaqprocess.php?id= '+$id+' ';
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
          <h1>FAQ Page</h1>

          <div class="main-content">





  <div class="text-right">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart">Add FAQ</button>

<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add FAQ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
               <div class="modal-body">
            <form method="post" action="faq.php">

             <p><div class="text-left"><label>Question</label></div>
             <input type="text" class="form-control" name="question" required=""></p>
             <div class="text-left"><label>Answer</label></div>
             <textarea class="form-control" type="text" name="answer" required=""></textarea>

             </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="post" value="post" class="btn btn-success">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
      <div class="row">

                    <!-- data table start -->
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="table">

        <form method="post" action="faq.php">



            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th></th>
                <th>Title</th>
                <th>Date</th>
                <th width="20" class="ac" colspan="3">Modify</th>
                <th></th>
              </tr>

          <?php
while ($row = mysqli_fetch_assoc($result)) {?>
              <tr>
                  <?php $id = $row['id'];?>
                <td></td>
                <td><h5><a href="#"></a><?php echo $row['question'];?></h5></td>
                <td><?php echo $time_post = date('Y-m-d G:i:s');?></td>


                <!--<th width="13"><input type="checkbox" class="btn btn-primary" name="todel" value="<?php //echo $row['id'];?>" class="checkbox" /></th>-->
                <td><a onclick="ConfirmDelete(<?php echo $id;?>)" class='btn btn-danger'>Delete </a></td>



               <!--<td><a href='' class="btn btn-success" data-toggle="modal" data-target=""><i class="far fa-edit"><?php //echo "";}?></i></a></td>-->
               <td><?php echo "<a href='editfaq.php?id=$id' class='btn btn-success'>Edit</a>";}?></td>
              </tr>
              </form>


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







    <div class="modal fade" id="modalCart2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

               <div class="modal-body">



             <form method="post" action="events/editfaqprocess.php">
             <p><div class="text-left"><label>Question</label></div>
             <input type="text" class="form-control" name="question" value="<?php echo $rw['question'];?>" /></p>
             <div class="text-left"><label>Answer</label></div>
             <textarea class="form-control" name="answer" ><?php echo $rw['answer'];?></textarea>

             </div>
      <!--Footer-->
      <div class="modal-footer">
        <input type="submit" name="update" value="EDIT" value="" class="btn btn-success"></input>
        <input type="" name="faq_id" value="<?php echo $rw['id'];?>">
       </form>

      </div>
    </div>
  </div>
</div>
</div>
<?php include_once 'footer_admin.php';?>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>