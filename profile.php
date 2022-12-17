
<?php
    include 'connection.php';
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE id='" . $_GET['ID'] . "'");   ////$_GET['ID'] diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
							
 ?>


<html>
   <head>
      <title> Your Profile</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <style >
	   
	   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.button {
  background-color: red; /* red */
  border: none;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:;
  cursor: pointer;
}
.button{border-radius: 12px;}

	   
.center {
      background-color: #2ecc91;
      width: 500px;
      height: 650px;
	  margin: auto;
      color:white;
    }
	   
	   
	   
	   </style>
   </head>
     
	 <body>
	       <div>
		  
		   <?php  include 'header.php'?>
		 
		   </div>
	        <div  class="container">
			
			      <form  action="" method="post">
				      <a href="edit-profile.php?ID=<?php echo $_GET['ID'] ?>&NAME=<?php print $_GET['NAME'];?>" <input type="submit" class="btn btn-secondary" style="float:right;width:70px"
					   name="submit" >Edit</a>
				  
				 
				  </form>
				 
				 <div class="center">
				     
					 
				    <h3 style="text-align:center">My Profile</h3>
					<br>
					
					
					
						
					  <?php 
					     if (mysqli_num_rows($result) > 0) {
							 
							  $i=0;
				                       while($row = mysqli_fetch_array($result)) {
					     echo"<div style='text-align:center'><img src=image/$row[Pic] class='rounded-circle' height=110 width= 120> </div>";
					  
					  ?>
					  
			    
					  
					  <div style="text-align:center"><b > Welcome 
                           
						      <?php echo $row['Name'];?></b>
						        
						   
						   
					</div>
					<br>
					
					  <?php
					  
					     
                            
					                   
					  
					   echo"<b>";
					      echo" <table class='table table-borderd'>";
						      echo "<tr>";
							      echo"<td>";
								     echo"<b> ID:</b>";
								  echo"</td>";
								   echo"<td>";
								       echo $row['id'];
								  echo"</td>";
						      echo "</tr>";
							  
							  echo "<tr>";
							        echo"<td>";
									     echo"<b> Name:</b>";
								    echo"</td>";
								    echo"<td>";
									      echo $row['Name'];
								    echo"</td>";
						      echo "</tr>";
							  
							  echo "<tr>";
							        echo"<td>";
									     echo"<b> Father Name:</b>";
								    echo"</td>";
								    echo"<td>";
									      echo $row['Father Name'];
								    echo"</td>";
						      echo "</tr>";
							   
							  echo "<tr>";
							        echo"<td>";
									     echo"<b> Service Type:</b>";
								    echo"</td>";
								    echo"<td>";
									      echo $row['Service Type'];
								    echo"</td>";
						      echo "</tr>";
							  
							  echo "<tr>";
							  
							        echo"<td>";
									     echo"<b> Email ID:</b>";
								    echo"</td>";
								    echo"<td>";
									      echo $row['Email'];
								    echo"</td>";
						      echo "</tr>";
							  
							  echo "<tr>";
							        echo"<td>";
									     echo"<b> Phone NO:</b>";
								    echo"</td>";
								    echo"<td>";
									      echo $row['Phone'];
								    echo"</td>";
						      echo "</tr>";
							  
							  echo "<tr>";
							  
							      echo"<td>";
									     echo"<b> Password:</b>";
								    echo"</td>";
								    echo"<td>";
									      echo $row['Password'];
								    echo"</td>";
						      echo "</tr>";
							   
							  
							  
						  
					      echo" </table>";
						  echo"</b>";
						    $i++;
							
							
							
												}
						  
						  
						
						  
						  }
else
{
    echo "No result found";
}
					  ?>
				</div>
				  
				
				  
			</div>
			
	  <div class="row"class="footer">
	           <?php include 'footer.php'?>
	
	         </div>
	 
	 </body>


</html>
