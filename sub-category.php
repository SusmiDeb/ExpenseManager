<html>
<head>
<title> Sub-category page</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">

<style>
#table-design {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
	  
	                         <h1 style="text-align: center"> ..Add Sub-Category..</h1>
	  
	                       </div>
						   <br>
	                       <br>
						   <br>
						   <br>
	            
		          <div class="col-lg-12">
			      
					
					   <form action ="" method="post">
					   
					       <label>Select a Category</label>
                             <select name="category" required>
			                 <option value="">-- Category --</option>
			
                                  <?php
                         include 'connection.php';

						$result = mysqli_query($conn,"SELECT id,category_name  FROM categories");

						while($row = mysqli_fetch_array($result))
						{
							
						echo "<option value=\"$row[0]\">$row[1]</option>";
						
						}
						

						mysqli_close($conn);
                                     ?>			
			
			
		             </select>
					   <br>
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
							  <input type="submit" name="addcat" value="Add" class="btn btn-primary btn-lg ">
							</div>
						</div>
						   
							     
        

                       </form>  



                              <?php
						 
						 
						 	include 'connection.php';
							
							
							 if(isset($_POST ['addcat']))
							 {
							
						 //$USER_ID diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
							
							 //$USER_ID diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
							
							$USER_ID = $_GET['ID'];
							$catid=$_POST['category'];
							$name=$_POST['subcat'];
							
							//$sql = "INSERT INTO subcategories ( category-id,subcategory_name) VALUES ('$catid','$name')";
							$sql ="INSERT INTO `subcategories` (`id`, `Registration-id`,`category_id`, `subcategory_name`) VALUES (NULL, '$USER_ID','$catid', '$name') ";
							//print $sql;

					if(mysqli_query($conn, $sql)){
						$message= "Records added successfully.";
					} else{
						echo "ERROR: Could not able to execute $sql. ";
					}
					 
					// Close connection
					mysqli_close($conn);
						
						
						
						 }
						
						
						?>
                       <div class="text-success"style="text-align:center"><?php if(isset($message)) { echo $message; } ?>
			           </div>						
                
	                </div>
			   </div>   
			   <br> <br> <br>
			   
			   <div class="col-lg-5"> 
				    <br>
				      <h3 style="text-align: center">List of added items</h3>
					<br>
					  
										<?php
										  include 'connection.php';
										 
								 $result= mysqli_query($conn,"SELECT subcategories.id, categories.Category_name,subcategories.subcategory_name
										  FROM categories
										  INNER JOIN subcategories
										  ON categories.id=subcategories.Category_id");

										   if (mysqli_num_rows($result) > 0) {
										?>
					  
					  <table id="table-design">
					       <tr>
						       <th> ID</th>
							   <th>Category Name</th>
							   <th>Sub-category Name</th>
							   <th > Action </th>
						   </tr>
						   
										<?php
										  $i=0;
											while($row = mysqli_fetch_array($result)) {
										?>             
						   
						   <tr>
								<td><?php echo $row[0]; ?></td>
								<td><?php echo $row[1]; ?></td>	
								<td><?php echo $row[2]; ?></td>	
                                <td>
								  <a onclick="myFunction()"class="btn btn-primary btn-sm" href="subcat-update-process.php?subcatid=<?php echo $row[0]; ?>&ID=<?php echo $_GET['ID']; ?>&NAME=<?php print $_GET['NAME'];?>">Update</a>
								  <a onclick="myFunction()"class="btn btn-danger btn-sm" href="subcat-delete-process.php?subcatid=<?php echo $row[0]; ?>&ID=<?php echo $_GET['ID']; ?>">Delete</a>
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
										     ?>		

					  
	  
						
	  
	             </div>
			 
			 </div>
			 </div>
			 </div>
			 
			 
			 
          <div class="row"class="footer">
	           <?php include 'footer.php'?>
	
	         </div>

</body>
</html>