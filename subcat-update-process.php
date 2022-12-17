<?php
include 'connection.php';
if(count($_POST)>0) {
	
	
	
	
	//UPDATE `categories` SET `Category_name` = 'Travel' WHERE `categories`.`id` = 2; 
	
	
	mysqli_query($conn,"UPDATE `subcategories` SET
						`subcategory_name`='" . $_POST['subcat'] . "'
						     WHERE `subcategories`.`id` = '" . $_GET['subcatid'] . "'");
			$userid = $_GET['ID'];
						
						//header("location: sub-category.php?ID=$userid");
						header("location: sub-category.php?ID=".$_GET['userid']."&NAME=".$_GET['NAME']);
						
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM `subcategories` WHERE id='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>




<html>
<head> 
<title> update subcategory or category</title> 
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
   <body>
      <div >
		         <?php include 'header.php'?>
		 
		        </div>  <br>
				 
				<div class="row">
                  <div class="col-lg-12"> 
	  
	              <h2 style="text-align: center"> ..Update your category or subcategory..</h2>
	  
	              </div>
   
                </div>
				
				<div class="row">
					<div class="col text-center">
					
					
			<form name="frmUser" method="post" action="">
				
				<div style="padding-bottom:5px;">
				    <a href="sub-category.php?ID=<?php echo $_GET['ID']; ?>&NAME=<?php echo $_GET['NAME'] ?>">Go for category or sub-category List</a>
				</div>
				<br>
				      	
					   
					   
					   <!-- text drowpdown field -->
        
							<div>
							Sub-category:  
							<input type="text" id="text" name="subcat"  class="btn btn-secondary btn-lg"  class="col text-center"
							placeholder="Enter the sub-category"  style="padding-left: 7rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;" /> <br>    
							
							<br> <br> 

						   </div>
						   
						   
						   
				
			   
			    <div class="row">
						
					<div  class="col text-center" >
					  <input type="submit"  value="Reset"  class="btn btn-primary btn-lg "  >
					  <input type="submit" name="addcat" value="Submit" class="btn btn-primary btn-lg ">
					</div>
			   </div>
			   
			   
			  <br>
			  <div class="text-success"><?php if(isset($message)) { echo $message; } ?>
			 </div>
			   		
		</form>
		
		

					</div>
				  </div>
				
			  <div class="row"class="footer">
		      <?php include 'footer.php'; 
						mysqli_close($conn);?>
		
		     </div>			
   
   </body>

</html>