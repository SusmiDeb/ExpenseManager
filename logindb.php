<?php
							

include 'connection.php';


       $username = $_POST['mail'];
       $password = $_POST['pass'];



   if(isset($_POST['submit']))
   {
   if($username && $password)
   {
           $check = mysqli_query($conn, "SELECT * FROM registration WHERE Email='".$username."' AND Password= '".$password."'");
           $rows = mysqli_num_rows($check);


         if(mysqli_num_rows($check)!=0)
         {
             echo "Successful login.";
			 
			 //$_SESSION="$username";
			 
			 $USERARRAY = mysqli_fetch_array($check);   //registration table theke array sob data fetch koreci tar theke sudhu 0 no position e j id ace seta use korteci .
			 
			 //$NAME="$USERARRAY[1]";
			 
			 header("location: home.php?ID=$USERARRAY[0]&NAME=$USERARRAY[1]");    // Get the value id in registration table using USERARRAY.
			 
			 
         }
         else
         {
            echo "Couldn't find username.";

         }
      }
      else
      {
         echo "Please fill all the fields.";
      }
   }
?>