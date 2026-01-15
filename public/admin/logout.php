 <?php
    session_start();
    unset($_SESSION['email']);
    session_destroy();
    // if(session_destroy()) // Destroying All Sessions
    // {
   
 echo "<script>window.location='../loginadmin.php'</script>"; // Redirecting To Home Page
    // }


    ?>