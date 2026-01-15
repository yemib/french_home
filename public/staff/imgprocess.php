<?php
 include 'server.php';
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
  $targett = "../french village/img/".basename($img);

  $sql = "INSERT INTO staff (img, img_text) VALUES ('$img', '$img_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['img']['tmp_name'], $targett)) {
      //header("Location: indexlec.php");
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}


$result = mysqli_query($db, "SELECT * FROM staff");
$rt = mysqli_query($db, "DELETE * FROM staff");
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



<body>
    <?php include_once 'header_admin.php';?>
    <?php include_once 'nav.php';?>

    <div id="home" class="container-fluid resume-container" style="background-color: #FFF;">
<?php include_once 'sidebar.php';?>
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
    }
  ?>
                                     <img src="<?php echo 'img/".$row[img]."' ?>" alt="">
                                 </div>
                                 <div class="col-lg-12 col-md-9 col-sm-9 ccol-12 baci-cc no-padding" style="background-color: #212529;" >

                                     <div class="basic-detail no-padding" style="background-color: #212529;">
                                           <h2><?php
                                           if (isset($_SESSION['user'])){
                                               $username = $_SESSION['username'];
                                               $id = $_SESSION['userid'];
                                               echo " $username";
                                               //echo " $id";
                                           }

                                           ?></h2>
                                          <?php $select = "SELECT  * FROM staff WHERE id = '$id' ";

                                           $result = $db->query($select);
                                           if ($result->num_rows>0){
                                           	while($rows=$result->fetch_assoc()){
                                            		$id = $rows['id'];
                                            		$title = $rows['title'];?>

                                           <p><?php echo $title; }}?></p>

                                      </div>
                                      <form method="post" action="imgprocess.php" enctype="multipart/form-data">
                                 </div>
                                 <input type="file" name="img" class="form-control"><input type="text" name="img_text"><button name="upload" class="btn btn-success">Update</button>
                            </div></form>



                          </div>
                          <div class="col-lg-8 col-md-12 detail-profile no-padding">
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                                  </li>

                                  <li class="nav-item">
                                    <a class="nav-link" id="resume-tab" data-toggle="tab" href="#resume" role="tab" aria-controls="profile" aria-selected="false">Resume</a>
                                  </li>

                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                  </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                  <!--  ************************* Home Tab Starts Here ************************** -->
                                  <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">

                                      <div class="detal-jumbo">
                                          <p><h5>Title</h5>
                                          Hello I'm Web Designer / Developer</p>
                                          <h5  style="padding-top: 10px">About Me</h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries <div class="text-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart">Upadate</button></div>


                                    </div>
                                  </div>
                                     <!-- ######## Home Tab End ####### -->

                                    <!--  ************************* Profile Tab Starts Here ************************** -->
                             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                      <div class="sec-title">
                                          <h2>Services &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart3">Add</button></h2>
                                      </div>

                                      <div class="service no-margin row">
                                          <div class="col-sm-2 col-2 serv-logo">
                                              <i class="fab fa-delicious"></i>
                                          </div>
                                          <div class="col-sm-10 col-10">
                                              <h5>Graphic Design</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">remove</a></button>
                                          </div>
                                      </div>
                                      <div class="service no-margin rit-serv row">

                                          <div class="col-sm-10 col-10">
                                              <h5>Website Design</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><div class="text-right"><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">remove</a></button></div>
                                          </div>
                                          <div class="col-sm-2 col-2 serv-logo-right">
                                              <i class="fas fa-code"></i>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-2 serv-logo">
                                             <i class="fab fa-chrome"></i>
                                          </div>
                                          <div class="col-sm-10 col-10">
                                              <h5>Web Development</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">remove</a></button>
                                          </div>
                                      </div>
                                      <div class="service no-margin rit-serv row">

                                          <div class="col-sm-10 col-10">
                                              <h5>Android Development</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><div class="text-right"><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">remove</a></button></div>
                                          </div>
                                          <div class="col-sm-2 col-2 serv-logo-right">
                                              <i class="fab fa-android"></i>
                                          </div>
                                      </div>

 <div class="text-left">
                          </div>

                                          </div>






                                     <!-- ######## Profile Tab End ####### -->

                                   <!--  ************************* Resume Tab Starts Here ************************** -->
                                  <div class="tab-pane fade" id="resume" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="sec-title">
                                          <h2>Education Details &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCart4">Add</button></h2>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>Master Degree</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>Cambridg University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">Remove</a></button>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>Bacholers Degree</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>Anna University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">Remove</a></button>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>High School</p>
                                          </div>
                                          <div class="col-sm-9">
                                              <h5>A.M.H.S.S</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><button type="button" class="btn btn-rounded  btn-danger mb-2"><a href="" style="color: black;">Remove</a></button>
                                          </div>
                                      </div>


                                          </div>

                                   <!-- ######## Resume Tab End ####### -->

                                   <!--  ************************* Portfolio Tab Starts Here ************************** -->
                                   <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="row no-margin gallery">
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_01.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_02.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_03.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_04.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_05.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_06.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_10.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_08.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="assets/images/gallery/gallery_09.jpg" alt="">
                                          </div>

                   <input type="file" name="img" class="btn btn-dark " />
                   <button type="button" class="btn btn-rounded  btn-success mb-2"><a href="" style="color: black;">Add Image</a></button>
                                        </div>
                                      </div>

                                   <!-- ######## Portfolio Tab End ####### -->

                                   <!--  ************************* Contact Tab Starts Here ************************** -->
                                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                                      <div class="jumbo-address">
                                         <div class="row">
                                                  <div class="col-sm-6 no-padding">

                                                  <table class="addrss-list">
                                                      <tr>
                                                          <th>E-mail</th>
                                                          <td><input type="" class="form-control" name="" placeholder="e.g info@yourdomain.com"></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Phone</th>
                                                          <td><input type="" class="form-control" name="" placeholder="+9878676587"></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Date of birth</th>
                                                          <td><input type="" class="form-control" name="" placeholder="09-06-1989"> </td>
                                                      </tr>

                                                  </table>

                                          </div>
                                          <div class="col-sm-6 no-padding">
                                               <table class="addrss-list">
                                                      <tr>
                                                          <th>Address</th>
                                                          <td><input type="" class="form-control" name="" placeholder="112 - Roos Street, Nagercoil"></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Website</th>
                                                          <td><input type="" class="form-control" name="" placeholder="www.yourdomain.com"></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Languages</th>
                                                          <td><input type="" class="form-control" name="" placeholder="English,French,Germany"></td>
                                                      </tr></table>
                                                       <div class="text-right"><button type="button" class="btn btn-rounded  btn-success mb-2"><a href="" style="color: black;">Update</a></button></div>
                                          </div>
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
            <form method="post" action="faq.php">



             <p><div class="text-left"><label>Title</label></div>
             <input type="text" class="form-control" placeholder="e.g Ionic Development" name="question" required=""></p>
             <div class="text-left"><label>Detail</label></div>
             <textarea class="form-control" placeholder="content of the profile" type="text" name="answer" required=""></textarea>

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
            <form method="post" action="faq.php">



                 <p><div class="text-left"><label>Title</label></div>
                 <input type="text" class="form-control" value="Hellow I'm Web Designer/Developer" name="question" required=""></p>
                 <div class="text-left"><label>About Me</label></div>
                     <textarea cols="40" rows="10" class="form-control" type="text" name="answer" required="">Lorem Ipsum is simply dummy text of the printing  and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</textarea>

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
