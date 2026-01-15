
<script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to Delete?"))
                 window.location.href='events/deldeptprocess.php?id= '+$id+' ';
               return true
      }
</script>

<?php
include "../conn.php";

$select = "SELECT  * FROM departments ORDER BY id desc";

$result = $conn->query($select);
if ($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
 		$id = $rows['id'];
 		$title = $rows['name'];
 		//echo $title." "."<input type='submit' value='delete'></input>". "<br><br>";
?>

<table>
<tr>
    <td><?php
 		echo $title;?><td>
        <td><a  onclick="ConfirmDelete(<?php echo $id;?>)"><input class='btn btn-danger mb-2' type='button' value='Delete'></a>
        </td>
 		
</table>

    <?php 	}
}
else{
	echo $conn->error;
}?>