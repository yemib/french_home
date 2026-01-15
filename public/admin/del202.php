<?php
if ($_SESSION['email']) : 
$db = mysqli_connect('localhost', 'root', '', 'database');
	if(isset($_POST['name']))
	{
	  $name = $_POST['name'];
 
	  if(mysqli_query($db, "INSERT INTO apple VALUES('','$name')"))
		echo "Successful Insertion!";
	  else
		echo "Please try again";
	}
 
 
	$res = mysqli_query($db, "SELECT * FROM apple");
 
 
?>
 
<form action="." method="POST">
Name: <input type="text" name="name"/><br>
<input type="submit" value="Enter "/>
</form>
 
<h1>List of companies ..</h1>
<?php
	while( $row = mysqli_fetch_array($res) ){
	  echo "$row[id]. $row[name]. <a href='del202.php?edit=$row[id]'/>edit<br>";
                	?>
                	<?php
	}
 
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysqli_query($db, "SELECT * FROM apple WHERE id='$id'");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['newName']) )
	{
		$newName = $_POST['newName'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE apple SET name='$newName' WHERE id='$id'";
		$res 	 = mysqli_query($sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
 
?>
<form action="edit.php" method="POST">
<p>Name: <input type="text" name="newName" value="<?php echo $row[1]; ?>/>"><br></p>
<input type="hidden" name="id" value="<?php echo $row[0]; ?>">
<input type="submit" value="Update"/>
</form>
<?php else :?>
<?php  header('location: login.php')?>
<?php endif;?>