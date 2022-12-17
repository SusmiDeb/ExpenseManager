

Subcategory:

<select id="subcatt" name="subcatt">
<option>Select Subcategory</option>

<?php
include('connection.php');


$id=$_POST['id'];





	$sql = mysqli_query($conn,"SELECT id, subcategory_name FROM `subcategories` WHERE `Category_id` ='$id'");
	
	
	while($row = mysqli_fetch_array($sql)){
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}

?>
</select>


