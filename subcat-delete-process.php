<!--for delete category-->
		


<?php

include 'connection.php'; // Using database connection file here

$subcatid = $_GET['subcatid']; // get id through query string

$result= mysqli_query($conn,"delete from `subcategories` where id = '$subcatid'"); // delete query

if($result)
{
    mysqli_close($conn); // Close connection
    $userid = $_GET['ID'];
	//header("location: sub-category.php?ID=$userid");
    header("location: sub-category.php?ID=".$_GET['userid']."&NAME=".$_GET['NAME']);
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete  
}
?>