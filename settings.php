<html>
  <head>
  
  <title> Settings</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>

   <body>
           <div >
		   <?php include 'header.php'?>
		 
		   </div>
		   
		   <br>
		   <br>
		   <br>
		   <br>
		   <br>
		   
		   <div class="row">
               <div class="col-lg-4"> 
	  
	            <div  class="text-center text-lg-start mt-4 pt-2"  >
		          
			       <a href="category.php?ID=<?php print $_GET['ID'];?>&NAME=<?php print $_GET['NAME'];?>"> <button class="btn btn-primary btn-lg" class="button"
				   style="padding-left: 5rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;"> <h1>Category</h1> </button></a>
					    
                </div>
	  
	           </div>
			   
			    <div class="col-lg-4"> 
	  
	            <div  class="text-center text-lg-start mt-4 pt-2"  >
		          
			       <a href="sub-category.php?ID=<?php print $_GET['ID'];?>&NAME=<?php print $_GET['NAME'];?>"> <button class="btn btn-primary btn-lg" class="button"
				   style="padding-left: 5rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;"> <h1>Subcategory</h1> </button></a>
					    
                </div>
	  
	           </div>
			   
			   <div class="col-lg-4"> 
	  
	            <div  class="text-center text-lg-start mt-4 pt-2"  >
		          
			       <a href="profile.php?ID=<?php print $_GET['ID'];?>&NAME=<?php print $_GET['NAME'];?>"> <button class="btn btn-primary btn-lg" class="button"
				   style="padding-left: 5rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;"> <h1>Profile</h1> </button></a>
					    
                </div>
	  
	           </div>
   
             </div>
    
     <div class="row"class="footer">
	  <?php include 'footer.php'?>
	
	</div>
	
   </body>
</html>