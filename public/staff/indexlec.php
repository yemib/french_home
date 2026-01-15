<?php
if (isset($_SESSION['email'])){  
  # code...

//include 'server.php';

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
  $targett = "../img/img/".basename($img);


  $sql = "INSERT INTO staff (img, img_text) VALUES ('$img', '$img_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
   
}
$username = $_SESSION['username'];
                                               $id = $_SESSION['userid'];
$result = mysqli_query($db, "SELECT * FROM staff WHERE id = $id ");
$rt = mysqli_query($db, "DELETE * FROM staff WHERE id = $id");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>SmartEyeapps.com</title>
</head>
<style type="text/css">
  
  #st{
    height: 315px;
    width: 350px;
  }
</style>


<body>

    <div id="home" class="container-fluid resume-container" style="background-color: #FFF;">

        <!--  ************************* Container Starts Here ************************** -->

          <div class="container">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 resume-box">
                      <div class="row">
                          <div class="col-lg-4 col-md-12 basic-profile">

                            <div class="row no-margin">
                                 <div class="col-lg-12 col-md-3 col-sm-3 col-12 no-padding">
                                   <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                          ?><?php echo "<img id='st' src=' ../img/".$row['img']."'>";} ?>
                                <div class="text-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart3">Update Pics</button></div>
                             </div>
                                 <div class="col-lg-12 col-md-9 col-sm-9 ccol-12 baci-cc no-padding" style="background-color: #212529;" >

                                     <div class="basic-detail no-padding" style="background-color: #212529;">
                                           <h2><?php
                                               $username = $_SESSION['username'];
                                               $id = $_SESSION['userid'];
                                               echo " $username";
                                               //echo " $id";
                                           

                                           ?></h2>
                                          <?php $select = "SELECT  * FROM staff WHERE id = '$id' ";

                                           $result = $db->query($select);
                                           if ($result->num_rows>0){
                                           	while($rows=$result->fetch_assoc()){
                                            		$id = $rows['id'];
                                            		$designation = $rows['designation'];
                                                $acad_qualification = $rows['acad_qualification'];
                                            		$area_of_specs = $rows['area_of_specs'];
                                            		$email = $rows['email'];
                                            		$phone = $rows['phone'];
                                            		$office_address = $rows['office_address'];
                                                $name = $rows['name'];
                                                    ?>

                                           <p><?php }}?></p>

                                      </div>
                                      
                            </div>
                            </div>


                          </div>
                          <div class="col-lg-8 col-md-12 detail-profile no-padding">
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                                  </li>

                                  <!--<li class="nav-item">
                                    <a class="nav-link" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="profile" aria-selected="false">Resume</a>
                                </li>-->

                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                  </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                  <!--  ************************* Home Tab Starts Here ************************** -->
                                  <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">

                                      <div class="detal-jumbo">
                                          <p><h5>Name</h5>
                                          <?php echo $name;?></p><br>

                                          <p><h5>Designation:</h5>
                                          <?php echo $designation;?></p><br>
                                          <p><h5>Academic and Professional Qualifications:</h5>
                                          <?php echo $acad_qualification;?></p><br>
                                          <p><h5>Area(s) of Specialization:</h5>
                                           <?php echo $area_of_specs;?></p><br>
                                    
                                            <div class="text-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart">Edit</button></div>



                                    </div>
                                  </div>
                                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                                      <div class="jumbo-address">
                                         <div class="row">
                                             <form class="" action="editcontact.php" method="post">



                                              <div class="col-6 no-padding">

                                              <table class="addrss-list">
                                                <tr>
                                                <th>Email</th>
                                                <td style="width: 2000px"><input type="text" class="form-control" value="<?php echo $email;?>" name="email" placeholder="e.g info@yourdomain.com" ></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Phone</th>
                                                          <td><input type="number" class="form-control" value="<?php echo $phone;?>" name="phone" placeholder="+9878676587"></td>
                                                      </tr>
                                                     <!-- <tr>
                                                          <th>Date of birth</th>
                                                          <td><input type="" class="form-control" name="" placeholder="09-06-1989"> </td>
                                                      </tr>-->

                                                  </table>

                                          </div>
                                          <div class="col-sm-6 no-padding">
                                               <table class="addrss-list">
                                                      <tr>
                                                          <th>Office Addresses:</th>
                                                          <td><textarea cols="20" rows="5" type="" class="form-control" value="" name="address" placeholder="112 - Roos Street, Nagercoil"><?php echo $office_address;?></textarea></td>
                                                      </tr>
                                                      <input type="hidden" name="staff_id" value="<?php echo $id;?>">
                                                      <!--<tr>
                                                          <th>Website</th>
                                                          <td><input type="" class="form-control" name="" placeholder="www.yourdomain.com"></td>
                                                      </tr>-->
                                                      <!--<tr>
                                                          <th>Languages</th>
                                                          <td><input type="" class="form-control" name="" placeholder="English,French,Germany"></td>
                                                      </tr>--></table>
                                                       <div class="text-right"><input type="submit" value='Update' class="btn btn-rounded  btn-success mb-2"></div>
                                          </div>
                                          </form>
                                          </div>

                                      </div>
                                  </div>
                                   <!-- ######## Contact Tab End ####### -->
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>                                                                                                                                                                                                 <!-- Modal: modalCart -->
<div class="modal fade" id="modalCart3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
               <div class="modal-body">
<form method="post" action="editphoto.php" enctype="multipart/form-data">
                                
             <p><div class="text-left"><label>Update My Picture</label></div>
             <input type="file" name="img" class="form-control">
                                 <!-- <input aria-describedby="basic-addon2 type="text" name="title"> -->
                                 <input type="hidden" class="form-control" name="staff_id" value="<?php echo $id;?>"><br></p>
            
             </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="upload" value="post" class="btn btn-success">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>




<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
               <div class="modal-body">


            <form method="post" action="editprofile.php">

                 <input type="hidden" name="staffprofile_id" value="<?php echo $id;?>">
                 <p><label>Name:</label><input type="text" class="form-control" value="<?php echo $name;?>" name="name" required=""></p><br>
                 <p><label>Designation:</label><input type="text" class="form-control" placeholder="" name="designation" value="<?php echo $designation; ?>"></p><br>
                 <p><label>Academic and Professional Qualifications:</label><textarea cols="40" rows="5" class="form-control" name="acad_qualification" required=""><?php echo $acad_qualification; ?></textarea></p><br>
                 <p><label>Area(s) of Specialization:</label><textarea cols="40" rows="5" class="form-control" name="area_of_specs" required=""><?php echo $area_of_specs;?></textarea></p><br>
                 



                      </div>
      <!--Footer-->
                  <div class="modal-footer">
                 <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="post" value="post" class="btn btn-success">Update</button>
            </form>
          </div>
        </div>
   </div>

</div>




<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
               <div class="modal-body">
            <form method="post" action="faq.php">



                 <p><div class="text-left"><label>Duration</label></div>
                 <input type="text" class="form-control" placeholder="2013-2015" name="question" required=""></p>
                 <p><div class="text-left"><label>Degree</label></div>
                 <input type="text" class="form-control" placeholder="2013-2015" name="question" required=""></p>
                  <p><div class="text-left"><label>School</label></div>
                 <input type="text" class="form-control" placeholder="School" name="question" required=""></p>
                 <div class="text-left"><label>About Me</label></div>
                     <textarea class="form-control" type="text" name="answer" required="" placeholder="breif the content"></textarea>

                      </div>
      <!--Footer-->
                  <div class="modal-footer">
                 <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="post" value="post" class="btn btn-success">Update</button>
            </form>
          </div>
        </div>
   </div>

</div>



        <!-- ######## Container End ####### -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
</body>

</html>
<?php }
else{ 
header("location: logout.php");
} ?>