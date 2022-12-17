<?php
  include 'connection.php';
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE id='" . $_GET['ID'] . "'");   ////$_GET['ID'] diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
							
 ?>




<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

</style>
</head>
<body>

<ul>

      
		
		<?php /*
		
					     if (mysqli_num_rows($result) > 0) {
							 
							  $i=0;
				                       while($row = mysqli_fetch_array($result)) {
					     echo"<div style='float:left'><img src=image/$row[Pic] class='rounded-circle' height=25 width= 20> </div>";
					  
					  ?> 



		  </li>
        <li><a href="profile.php?ID=<?php print $_GET['ID']?>">Wellcome <?php   echo $_GET['NAME'] ;?></a></li>
  
  
  
  
  <?php
  
   $i++;
  
  }
			mysqli_close($conn);			  
						  
						  }
else
{
    echo "No result found";
}
  
  
  
 */ ?>
  
  <li><a href="profile.php?ID=<?php print $_GET['ID']?>&NAME=<?php print $_GET['NAME'];?>">Wellcome</a></li>
  
  <li style="float:right">  <a href="index.php"><button class="button">Logout</button></a></li>
  <li style="float:right"><a href="home.php?ID=<?php print $_GET['ID']?>&NAME=<?php print $_GET['NAME'];?>"><i class="fa fa-fw fa-home"></i>Home</a></li>
    
</ul>

</body>
</html>
