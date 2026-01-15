<?php include '../server.php';
// ADMIN LOGIN
if (isset($_POST['staff_login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (count($errors) == 0) {
    $query = "SELECT * FROM staff WHERE email ='$email' AND password='$password'";

    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        while($rows=$results->fetch_assoc()){
     		$id = $rows['id'];
            $name =$rows['name'];

            $email =$rows['email'];
          }

      $_SESSION['email'] = $email;
      $_SESSION['username'] = $name;
      $_SESSION['userid'] = $id;

      //echo  $_SESSION['username'] ;
      //$_SESSION['success'] = "You are now logged in";
     header('location: ../update.php');
    }else {
      array_push($errors, "Wrong username/password combination");

    
    }
  }
}
 ?>
