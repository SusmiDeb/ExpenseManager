<?php
    include 'connection.php';
   // $result = mysqli_query($conn,"SELECT * FROM registration WHERE id='" . $_GET['ID'] . "'");   ////$_GET['ID'] diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
	//$result = mysqli_query($conn,"SELECT id,Category_name FROM categories WHERE Registration-id ='" . $_GET['ID'] . "'");						
	$userid =	$_GET['ID'];
	$uname = $_GET['NAME'];
 ?>

<html>

<head>
   <title> Category </title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
	 
	 <style>
	 body{
		 margin-bottom: 50px;
	 }
#table-design {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#table-design td, #table-design th {
  border: 1px solid #ddd;
  padding: 5px;
  
}

#table-design tr:nth-child(even){background-color: #f2f2f2;}

#table-design tr:hover {background-color: #ddd;}

#table-design th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding-right:70px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  

}


</style>
</head>

  <body>
  
        <div >
		   <?php include 'header.php'?>
		 
		</div>
		
		     <div class="row">
               <div class="col-lg-7"> 
			        
					       <div class="col-lg-12"> 
	  
	                         <h1 style="text-align: center"> ..Category..</h1>
	  
	                       </div>
						   <br>
	                       <br>
						   <br>
						   <br>
	            
		          <div class="col-lg-12">
			      
					
					   <form action ="" method="post">
					   
					   
					   
					   
					   
					   <!-- text drowpdown field -->
        
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
						   
							     
        

                       </form>  



                              <?php
						 
						 
						 	include 'connection.php';
							
							
							 if(isset($_POST ['addcat']))
							 {
							
						 //$USER_ID diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
							
							$USER_ID = $_GET['ID'];
							$name=$_POST['cat'];
							
							$sql = "INSERT INTO `categories` (`id`, `Registration-id`, `Category_name`) VALUES (NULL, '$USER_ID', '$name')";
							
							//INSERT INTO `categories` (`id`, `Registration-id`, `Category_name`) VALUES (NULL, '3', 'grocery');
							//$sql = "INSERT INTO categories (registration-id, category_name)VALUES('$USER_ID','$name')";
							
					//print $sql;

					try {
						if(mysqli_query($conn, $sql)){
							$message= "Records added successfully.";
						} else{
							echo "ERROR: Could not able to execute $sql. ";
						}
					}
					//catch exception
					catch(Exception $e) {
					  echo '<div class="text-danger"style="text-align:center">Record already exist.</div>';
					}
					}
						
						
						?>
                       <div class="text-success"style="text-align:center"><?php if(isset($message)) { echo $message; } ?>
			           </div>						
                
	                </div>
			   </div>
	         
             <br><br><br>
			    <div class="col-lg-5"> 
				    <br>
				      <h3 style="text-align: center">List of added Category</h3>
					<br>
					  				<?php
								          $result = mysqli_query($conn,"SELECT id,Category_name FROM categories WHERE `Registration-id`=$userid");
										   if (mysqli_num_rows($result) > 0) {
										?>
					  
					  <table id="table-design">
					      <tr>
						       <th> ID</th>
							   <th>Category Name</th>
							   <th > Action </th>
						   </tr>
						   
										<?php
										  $i=0;
											while($row = mysqli_fetch_array($result)) {
										?> 
										
						   
						   <tr>
								<td><?php echo $row[0]; ?></td>
								<td><?php echo $row[1]; ?></td>	
								
                                <td>
							
								  <a onclick="myFunction()"class="btn btn-primary btn-sm" href="cat-update-process.php?ID=<?php echo $row[0]; ?>&userid=<?php echo $_GET['ID']; ?>&NAME=<?php print $_GET['NAME'];?>">Update</a>	
                                  <a onclick="myFunction()" class="btn btn-danger btn-sm" href="cat-delete-process.php?catid=<?php echo $row[0]; ?>&userid=<?php echo $_GET['ID']; ?>">Delete</a>	
								
								
                                 </td>
                           								
					       </tr>
						               
									   <script>
										function myFunction() {
										  confirm("Are you sure!");
										}
										</script>
						   
											 <?php
												$i++;
												}
											?>
								  </table>
					  
										
			   
										    <?php
													}
												  else
												   {
											          echo "No result found";
												    }
													
					// Close connection
					mysqli_close($conn);
										     ?>		

					  
	  
						
	  
	             </div>
				 
				 
				 
				 
	  
	             </div>
			 
			 
			 
			 
			 

			 <div class="row"class="footer">
	           <?php include 'footer.php'?>
	
	         </div>
  </body>
</html>


<!--for delete category-->
		


<?php

/*include 'connection.php'; // Using database connection file here

$id = $_GET['ID']; // get id through query string

$re= mysqli_query($conn,"delete from `categories` where id = '$id'"); // delete query




if($re)
{
    mysqli_close($re); // Close connection
    header(""); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}*/
?>