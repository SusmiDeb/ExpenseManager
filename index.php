<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="indexstyle.css">

    <title>Expense Manager</title>
</head>
<body>
    
 <div class="container"> 
  <div class="row">
      <div class="col-lg-12"> 
	  
	     <h1 style="text-align: center"> ..Expense Manager..</h1>
	  
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
            <form  action="logindb.php" method="post">
			<!-- Email input -->
                
                <div  class="form-outline mb-4">
                  
                  <input type="text" id="form3Example3" name="mail" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  <label class="form-label" for="form3Example3">Email address</label>
                  
				  
                </div>
				
				<!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" name="pass" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
				
				 <!-- Login submit button -->
                    
                <div class="text-center text-lg-start mt-4 pt-2">
                  <input type="submit" name="submit" value="login" class="btn btn-primary btn-lg"
                    style="padding-left: 7rem; padding-right: 7rem;">
                   
                </div>
				<!-- Registration  submit button -->
                <div class="text-center text-lg-start mt-4 pt-2">

                  <a href="registration.php"  class="btn btn-primary btn-lg" style="padding-left: 5rem; padding-right: 5rem;">Registration </a>
                </div>
	  
	  
	     <form>
	  
    </div>
    
  </div>
    <div class="row"class="footer">
	  <?php include 'footer.php'?>
	
	</div>
	

</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>