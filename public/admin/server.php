<?php session_start();

// initializing variables
$username = "";
$vission   = "";
$mission = "";
$id = "";
$admin_password = "";
$title = "";
$content = "";
$img = "";
$img_content = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'frenchvi_admin', 'FrenchvillagE', 'frenchvi_database');
// Finally, register user if there are no errors in the form


?>

