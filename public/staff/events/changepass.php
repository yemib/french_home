<?php
include "../server.php";

$select = "SELECT  * FROM french.staff ";

$result = $db->query($select);
if ($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
 		$id = $rows['id'];
 		$title = $rows['name'];
 		//echo $title." "."<input type='submit' value='delete'></input>". "<br><br>";
 		echo $title." "."<a href='events/deldeptprocess.php?id=$id'><input type='button' value='Delete'></a>"."<br><br>";
 		//echo "<a href='ratings.php?policy_id=$id'>$title<br><br></a>";
 		//echo "<a href='blog2.php?policy_id=$id'>$title<br><br></a>";
	}
}
else{
	echo $conn->error;
}
