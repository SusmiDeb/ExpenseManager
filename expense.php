<!DOCTYPE html>
<html>



<head>
	<title>Expense Entry</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.center {

			width: 500px;
			height: 150px;
			margin: auto;
			color: black;

		}
	</style>
</head>

<body>

	<div>
		<?php include 'header.php' ?>

	</div>
	<br>
	<br>



	<div class="container">

		<form action="" method="post">

			<div class="row">
				<div class="col">

					Category :
					<select id="cat" name="cat" class="country">
						<option value="0">Select Category</option>
						<?php
                               include('connection.php');
                               $sql = mysqli_query($conn, "SELECT * FROM categories");
                               while ($row = mysqli_fetch_array($sql)) {
	                               echo '<option value="' . $row['id'] . '">' . $row['Category_name'] . '</option>';
                               }
                               mysqli_close($conn); ?>
					</select><br><br>
				</div>
				<div class="col">


					<div id="subcategories">
						Subcategory : <select name="" class="">
							<option>Select Subcategory</option>
						</select>

					</div>
					<br>


					<!--label >Subcategory :</label> <select name="subcat" class="city">
				<option>Select Subcategory</option>
				</select-->
					<!--div id="subcategories">


				

		</div-->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
					</script>
					<script type="text/javascript">


						$(document).ready(function () {
							$("#cat").change(function ()               //cat is the id of category which is use for change function 
							{
								var id = $(this).val();
								var post_id = 'id=' + id;

								$.ajax
									({
										type: "POST",
										url: "ajax-ex.php",
										data: post_id,
										cache: false,
										success: function (data) {
											$("#subcategories").html(data);
										}
									});

							});
						});


					</script>

					<br>
					<br>
				</div>
				<div class="col">

					<label for="birthday">Date:</label>
					<input type="date" id="birthday" name="add-date">

				</div>

			</div>
			<br>
			<br>
			<div class="center">
				<div class="row">
					<div class="col">
						<h3>Amount:</h3>
						<input type="text" id="text" name="addex" class="btn btn-secondary btn-lg"
							class="col text-center" placeholder="Enter your Amount"
							style="padding-left: 7rem;  padding-top:1rem;  padding-bottom:1rem;padding-right:5rem;" />
						<br>

						<br> <br>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col text-center">



					<a href="#"> <button class="btn btn-primary btn-lg ">Reset</button></a>
					<input type="submit" name="addexpen" value="Entry" class="btn btn-primary btn-lg ">
				</div>


			</div>


			<?php

           include 'connection.php';


           if (isset($_POST['addexpen'])) {

	           //$USER_ID diye amra different user id k seperate korteci and protek page e jate oi user id tei category, subcategory other things jay tar jonno protek page e get user id dhore bujhay dite hobe asole kar under e input ta jabe 
           	$USER_ID = $_GET['ID'];

	           $catid = $_POST['cat'];
	           $name = $_POST['subcatt'];
	           $date = $_POST['add-date'];
	           $expensss = $_POST['addex'];

	           //$sql = "INSERT INTO subcategories ( category-id,subcategory_name) VALUES ('$catid','$name')";
           	$sql = "INSERT INTO `expense-entry` (`id`,`Registration-id`, `Category_id`,
							                              `Subcategory-id`,`Date`,`Amount`)
														  VALUES (NULL,'$USER_ID', '$catid', '$name','$date','$expensss')";

	           //print $sql;
           
	           if (mysqli_query($conn, $sql)) {
		           $message = "Records added successfully.";
	           } else {
		           echo "ERROR: Could not able to execute $sql. ";
	           }

	           // Close connection
           	mysqli_close($conn);



           }


           ?>




		</form>

		<br> <br>
		<div class="text-success" style="text-align:center">
			<?php if (isset($message)) {
	                  echo $message;
                  } ?>
		</div>
	</div>

	<div class="row" class="footer">
		<?php include 'footer.php' ?>

	</div>

</body>

</html>