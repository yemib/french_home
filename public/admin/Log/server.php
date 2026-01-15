<?php session_start();
 // initializing variables
$username = "";
$password = "";
$id = "";
$errors = array();
//CONNECT DATABASE
$db = mysqli_connect('localhost', 'root', '', 'database');

// ADMIN LOGIN
if (isset($_POST['admin_login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (count($errors) == 0) {
    $query = "SELECT * FROM admin WHERE id='$id', username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: jkbkb.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }

}
 ?>