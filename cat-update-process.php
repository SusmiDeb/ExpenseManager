


<?php
include 'connection.php';
if(count($_POST)>0) {
	
	
	
	
	//UPDATE `categories` SET `Category_name` = 'Travel' WHERE `categories`.`id` = 2; 
	
	
	mysqli_query($conn,"UPDATE `categories` SET
						`Category_name`='" . $_POST['cat'] . "'
						     WHERE `categories`.`id` = '" . $_POST['userid'] . "'");
			
			
			$uid = $_GET['userid'];   //ID=61&userid=5&NAME=Susmita
						header("location: category.php?ID=".$_GET['userid']."&NAME=".$_GET['NAME']);
						
						
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM `categories` WHERE id='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update information</title>

 <link rel="stylesheet" href="css/bootstrap.min.css">
	 

</head>
<body>
		
				<div >
		         <?php include 'header.php'?>
		 
		        </div>  <br>
				 
				<div class="row">
                  <div class="col-lg-12"> 
	  
	              <h2 style="text-align: center"> ..Update your category..</h2>
	  
	              </div>
   
                </div>
				
				
				
				  <div class="row">
					<div class="col text-center">
					
					
			<form name="frmUser" method="post" action="">
				
				<div style="padding-bottom:5px;">
				    <a href="category.php?ID=<?php echo $_GET['userid'] ?>&NAME=<?php echo $_GET['NAME'] ?>">Go for category List</a>
				</div>
				
					  <!--Userid:--> <br>
			      <input type="hidden" name="userid" class="txtField" value="<?php echo $row['id']; ?>">
			        <!--input type="text" name="userid"  value="<?php echo $row['id']; ?>"-->
			       <br>
			    <div>
			      Category:  
			        <input type="text" id="text" name="cat"  class="btn btn-secondary btn-lg"  class="col text-center"
			        placeholder="select the category"  style="padding-left: 7rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;" /> <br>    
							
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
		  <?php include 'footer.php'?>
		
		 </div>	
		
		
    </body>
		
</html>