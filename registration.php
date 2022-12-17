<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="indexstyle.css">

    <title>Registration Page</title>
</head>
<body>
    <div class="container"> 
	    <div class="row">
          <div class="col-lg-12"> 
	  
	        <h1 style="text-align: center"> ..Registration Form..</h1>
	  
          </div>
   
         </div>
		    <br>
			<br>
			<br>
		 <div class="row " >
		      <div class="col-lg-7"    class="columnGap">
      
	              <div  class =" col-md-12">   <!-- xl=extra large. medium screen er jonno 12 er theke 5 jayga nibe same vabe extra large screen theke 5 at the same way large screen er jonno 5 -->
	  
	    
                     <?php include 'slider.php'?>
				
		          </div>
               </div>
		 
               <div class="col-lg-4"   class="columnGap">
                    <form  action="" method="post">
					     <!-- Name input -->
		                  <div class="form-outline">
									<input type="text" id="form3Example1n"  name="link-name"class="form-control form-control-lg"  placeholder="Enter your Name" />
									<label class="form-label" for="form3Example1n">Name</label>

                          </div>
						  <!-- Father Name input -->
						  <div class="form-outline">
									<input type="text" id="form3Example1n"  name="link-fathername"class="form-control form-control-lg"   placeholder="Enter your Father Name"/>
									<label class="form-label" for="form3Example1n">Father Name</label>

                          </div>
						  <br>
						  <!--selection type input -->
						  <div class="col-md-6 mb-4" class="form-control form-control-lg">

								<select class="select"  name="link-type"  class="form-control form-control-lg">
								  <option value="Student">Student</option>
								  <option value="service holder">Service Holder</option>
								  
								</select>

                            </div>
							<!-- Email id input -->
							<div class="form-outline">
									<input type="email" id="form3Example1n"  name="link-mail"class="form-control form-control-lg"   placeholder="Enter your email Id"/>
									<label class="form-label" for="form3Example1n">Email</label>
                            
                          </div>
						    <!-- Phone no input -->
						  <div class="form-outline">
						  		   
                                   <input type="tel" id="phone" name="link-phone"  class="form-control form-control-lg" placeholder="01"  required>
								   <label class="form-label" for="form3Example1n"> phone number</label><br><br>
						  </div>
						  
						  
						  <!--Image uploading -->
						  <div class="form-outline mb-4">
                            <input class="form-control" type="file" name="uploadfile" value=""  class="form-control form-control-lg" placeholder="Choose yourimage file" />
							<label class="form-label" for="form3Example90">Image file</label>
                          </div>
						  
		                    <!-- Password input -->
				           <div class="form-outline mb-4">
							  <input type="text" id="form3Example90" name="link-pa"class="form-control form-control-lg" placeholder="Enter your password" />
							  <label class="form-label" for="form3Example90">Password</label>
						   </div>
						   <!-- Confirm password input -->
						   <div class="form-outline mb-4">
							  <input type="text" id="form3Example90" name="link-conpa"class="form-control form-control-lg" placeholder="Enter your Confirm password" />
							  <label class="form-label" for="form3Example90">Confirm Password</label>
						   </div>
						   <!-- Login submit button -->
                    
                          <div class="text-center text-lg-start mt-4 pt-2">
                             <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg"
                                          style="padding-left: 7rem; padding-right: 7rem;">
                   
                           </div>
						   
						   
						   
                    </form>
               </div>     
		 </div>
		 
		 
		 
					<?php
							include 'connection.php';
							
							
							 if(isset($_POST ['submit']))
							 {

							// Escape user inputs for security

									$name=  $_POST['link-name'];
									$fathername= $_POST['link-fathername'];
									$servicetype= $_POST['link-type'];
									$email= $_POST['link-mail'];
									$phone= $_POST['link-phone'];
									$pic= $_POST['uploadfile'];
									$password= $_POST['link-pa'];
									$confirmpassword= $_POST['link-conpa'];
									
									
									
									$sql="INSERT INTO `registration` (`id`, `Name`, `Father Name`,
																	`Service Type`, `Email`,`Pic`,`Phone`, 
																	`Password`, `Confirm password`) 
																	VALUES (NULL, '$name', '$fathername',
																	'$servicetype', '$email', '$pic','$phone',
																	'$password', '$confirmpassword')";
								 
							//print $sql;

							   if(mysqli_query($conn, $sql)){
								echo "Records added successfully.";
							} else{
								echo "ERROR: Could not able to execute $sql. ";
							}
							 
							// Close connection
							mysqli_close($conn);
							 }
							
                   ?>




		 <br>
		 <br>
		  <div class="row"class="footer">
	         <?php include 'footer.php'?>
	
	      </div>

     </div>






</body>




</html>