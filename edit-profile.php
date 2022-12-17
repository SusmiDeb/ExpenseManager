<?php
include 'connection.php';


   
    
	
 
if(count($_POST)>0) {
	
	
	
	
	
	               /* UPDATE `registration` SET 
				   `Name` = 'Protima', `Father Name` = 'Sub',
				   `Phone` = '01533115283', `Password` = 'lala', 
				   `Confirm password` = 'lala' WHERE `registration`.`id` = 4;  */
	
	  //$USER_ID = $_GET['ID'];
	
	
	
mysqli_query($conn,"UPDATE `registration` SET 
                         `Name`='" . $_POST['ulink-name'] . "',
						 `Father Name`='" . $_POST['ulink-fathername'] . "',
                          `Service Type`='" . $_POST['ulink-type'] . "',
                        `Email` ='" . $_POST['ulink-mail'] . "',						  
						`Phone` ='" . $_POST['ulink-phone'] . "',
                      						 
						`Pic` ='" . $_POST['uploadfile'] . "',
                        `Password` ='" . $_POST['ulink-pa'] . "'
                        WHERE `registration`.`id`='". $_POST['userid']."'");
						
						//UPDATE registration SET Name='susmi',Father Name='Sudhunghu',Service Type='Student',Email='lili@gmail.com',Password='pass' WHERE registration id  = 2;
						
						
			
		
			
     $message = "Record Modified Successfully";

}
$result = mysqli_query($conn,"SELECT * FROM registration WHERE id='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
					

<html>
 <head>
   <title> update your profile information</title>
   
   
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
   .center {
     
      width: 500px;
      height: 650px;
	  margin: auto;
      color:black;
    }
   </style>
    
  </head>


<body >


           <div >
		   <?php include 'header.php'?>
		 
		   </div>
		   
      <div class="container">
	       <div  class="row">
		       <div class="center">
			   
			   <div class="col-lg-12"> 
	  
	              <h2 style="text-align: center"> ..Update your profile..</h2>
	  
	              </div>
			        <form  action="" method="post">
					
					
					
					
					  <div style="padding-bottom:5px; text-align:center">
				    <a href="profile.php? ID=<?php echo $_GET['ID']; ?>&NAME=<?php echo $_GET['NAME'] ?>">-My Profile </a>
					<br>
					<input type="hidden" name="userid" class="txtField" value="<?php echo $row['id']; ?>">
                        <input type="text" name="userid"  value="<?php echo $row['id']; ?>">
				     </div>
					     <!-- Name input -->
		                  <div class="form-outline">
									<input type="text" id="form3Example1n" value="<?php echo $row['Name']; ?>" name="ulink-name" class="form-control form-control-lg"  placeholder="Enter your Name" />
									<label class="form-label" for="form3Example1n">Name</label>

                          </div>
						  <!-- Father Name input -->
						  <div class="form-outline">
									<input type="text" id="form3Example1n"  value="<?php echo $row['Father Name']; ?>" name="ulink-fathername"class="form-control form-control-lg"   placeholder="Enter your Father Name"/>
									<label class="form-label" for="form3Example1n">Father Name</label>

                          </div>
						  <br>
						  <!--selection type input -->
						  <div class="col-md-6 mb-4" class="form-control form-control-lg"  value="<?php echo $row['Service Type']; ?>">

								<select class="select"  name="ulink-type"  class="form-control form-control-lg">
								  <option value="Student">Student</option>
								  <option value="service holder">Service Holder</option>
								  
								</select>

                            </div>
							<!-- Email id input -->
							<div class="form-outline">
									<input type="email" id="form3Example1n"  value="<?php echo $row['Email']; ?>" name="ulink-mail"class="form-control form-control-lg"   placeholder="Enter your email Id"/>
									<label class="form-label" for="form3Example1n">Email</label>
                            
                          </div>
						    <!-- Phone no input -->
						  <div class="form-outline">
						  		   
                                   <input type="tel" id="phone" name="ulink-phone"  value="<?php echo $row['Phone']; ?>" class="form-control form-control-lg" placeholder="01"  >
								   <label class="form-label" for="form3Example1n"> phone number</label><br><br>
						  </div>
						  
						  
						  <!--Image uploading -->
						  <div class="form-outline mb-4">
                            <input class="form-control" type="file" name="uploadfile"  value="<?php echo $row['Pic']; ?>"  class="form-control form-control-lg" placeholder="Choose yourimage file" />
							<label class="form-label" for="form3Example90">Image file</label>
                          </div>
						  
		                    <!-- Password input -->
				           <div class="form-outline mb-4">
							  <input type="text" id="form3Example90" name="ulink-pa"  value="<?php echo $row['Password']; ?>" class="form-control form-control-lg" placeholder="Enter your password" />
							  <label class="form-label" for="form3Example90">Password</label>
						   </div>
						   
						   <!-- Login submit button -->
                    
                          <div class="text-center text-lg-start mt-4 pt-2">
                             <input type="submit" name="edit" value="Update" class="btn btn-primary btn-lg"
                                          style="padding-left: 7rem; padding-right: 7rem;">
                   
                           </div>
						   
						  
						   
						   
						   <div class="text-success"><?php if(isset($message)) { echo $message; } ?>
			              </div>
						  <br>
						  <br>
                    </form>
			   
			   
			    </div>
		   
		   
		   </div>
	  
	  </div>
	  

             <div class="row"class="footer">
	           <?php include 'footer.php'?>
	
	         </div>
	
</body>
</html>


