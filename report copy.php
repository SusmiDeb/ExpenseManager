<?php

//SELECT Category_id , SUM(Amount) as total FROM `expense-entry` GROUP BY Category_id;
 
?>

<html>

<head>
	<title> Report Page </title>


	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		#table-design {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#table-design td,
		#table-design th {
			border: 1px solid #ddd;
			padding: 5px;

		}

		#table-design tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#table-design tr:hover {
			background-color: #ddd;
		}

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
	<div>
		<?php include 'header.php'?>

	</div>

	<br> <br>

	<div class="container">

		<form action="" method="post">
			<div class="row">


				<div class="col">

					<select style=" float:right;" class="select" name="link-type" class="form-control form-control-lg">
						<option value="Student">January</option>
						<option value="service holder">February</option>
						<option value="Student">March</option>
						<option value="service holder">April</option>
						<option value="Student">May </option>
						<option value="service holder">June</option>
						<option value="Student">July</option>
						<option value="service holder">Auguest</option>
						<option value="Student">September</option>
						<option value="service holder">October</option>
						<option value="Student">November</option>
						<option value="service holder">December</option>

					</select>




				</div>

				<div class="col">
					<a href="edit-profile.php?id=<?php echo $_GET['ID'] ?>" <input type="submit"
						class="btn btn-primary " style="float:right;width:70px" name="submit">Report</a>

				</div>


		</form>
	</div>
	<br><br>

	<div class="row">

		<div class="col">

			<?php
						       include 'connection.php';
							   /*
								
								SELECT categories.Category_name ,
								SUM(`expense-entry`.Amount) AS Total
								FROM categories,`expense-entry`
								WHERE categories.id=`expense-entry`.Category_id 
								GROUP BY Category_id 
								
								
								
								
								*/
								
								
								
								
						      /* $result=mysqli_query($conn,"SELECT categories.Category_name , 
							                         SUM(`expense-entry`.Amount) AS Total 
													 FROM categories,`expense-entry` 
													 WHERE categories.id=`expense-entry`.Category_id 
													 GROUP BY Category_id; ");
								$result=mysqli_query($conn,"SELECT * FROM `expense-entry` where MONTH(Date)=10");
						          if (mysqli_num_rows($result) > 0) {

									*/
		$result=mysqli_query($conn,"SELECT categories.Category_name , 
		SUM(`expense-entry`.Amount) AS Total  FROM `expense-entry` where MONTH(Date)=1
		");
		if (mysqli_num_rows($result) > 0) {
						  ?>

			<table id="table-design">
				<tr>

					<th>Category Name</th>
					<th>Total</th>

				</tr>
				<?php
										         $i=0;
											     while($row = mysqli_fetch_array($result)) {
										       ?>

				<tr>
					<td>
						<?php echo $row["Category_name"]; ?>
					</td>

					<td>
						<?php echo $row["Total"]; ?>
					</td>
				</tr>


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

	<div class="row" class="footer">
		<?php include 'footer.php'?>

	</div>
</body>

</html>