<!--for delete category-->
		


<?php

include 'connection.php'; // Using database connection file here

 

$catid = $_GET['catid']; // get id through query string
$userid = $_GET['userid'];

$result= mysqli_query($conn,"delete from `categories` where id = '$catid'"); // delete query

if($result)
{
    mysqli_close($conn); // Close connection

    header("location: category.php?ID=".$_GET['userid']."&NAME=".$_GET['NAME']);
	
    //header("location: category.php?ID=$userid");  redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete  
}
 ?>
 
 
 
 
 
 
 
 
 
 
 <?php
/*include 'connection.php';
if(count($_POST)>0) {
	
	
	
	
	mysqli_query($conn,"delete from `categories` where id = '$id'"); // delete query
	
	
	/*mysqli_query($conn,"UPDATE `categories` SET
						`Category_name`='" . $_POST['cat'] . "'
						     WHERE `categories`.`id` = '" . $_POST['userid'] . "'");
			
						
						
						
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM `categories` WHERE id='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);*/
?>
 
 
 