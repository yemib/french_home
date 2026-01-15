<?php include 'server.php';
if ($_SESSION['email']) :?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php

// php code to Delete data from mysql database 

if(isset($_GET['delete']))
{
   
    $query = "DELETE FROM `users`";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
}

?>
</head>
<body>
<form action="php_delete_data_from_mysql_database.php" method="post">

            ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>

            <input type="submit" name="delete" value="Clear Data">
</body>
</html>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>