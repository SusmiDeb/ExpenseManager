<html>
 <head>
    <title>  Home page</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="homestyle.css">
 </head>

<body>
		 <div >
		   <?php include 'header.php'?>
		 
		 </div>
		    <div class="row">
               <div class="col-lg-12"> 
	  
	            <h1 style="text-align: center"> ..Expense Manager..</h1>
	  
	           </div>
   
             </div>
	 
		       <div  class="text-center text-lg-start mt-4 pt-2"  >
		          
			       <a  href="expense.php?ID=<?php print $_GET['ID'];?>&NAME=<?php print $_GET['NAME'];?>"> <button class="btn btn-primary btn-lg" class="button"
				   style="padding-left: 5rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;"> <h1>Expense Entry</h1> </button></a>
					    
                </div>
				 
                 <div  class="text-center text-lg-start mt-4 pt-2"  >
		          
			       <a href="settings.php?ID=<?php print $_GET['ID'];?>&NAME=<?php print $_GET['NAME'];?>"> <button class="btn btn-primary btn-lg" class="button"
				   style="padding-left: 5rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;"> <h1>Settings</h1> </button></a>
					    
                </div>
                
                <div  class="text-center text-lg-start mt-4 pt-2"  >
		          
			       <a href="report.php?ID=<?php print $_GET['ID'];?>&NAME=<?php print $_GET['NAME'];?>"> <button class="btn btn-primary btn-lg" class="button"
				   style="padding-left: 5rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;"> <h1>Report</h1> </button></a>
					    
                </div>				
		   
	 
	 
	 
		  <div class="row"class="footer">
		  <?php include 'footer.php'?>
		
		 </div>
  


</body>

</html>