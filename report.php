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
		<?php include 'header.php' ?>

	</div>

	<br> <br>

	<div class="container">

		<form action="" method="post">
			<div class="row">
		
				<?php
            $id = $_GET['ID'];
            $name = $_GET['NAME'];
			$month = filter_input(INPUT_POST, 'month', FILTER_SANITIZE_STRING);
            ?>
			<?php if ($month) : ?>
				
<?php else : $month = 0;?>
    
<?php endif ?>

				<div class="col">
					<!-- <form action="<?php echo "report.php?ID=$id&NAME=$name&MONTH=5" ?>" method="get"> -->
					<form action="" method="post">
						<select name="month" id="month" style="float:right;" class="select" name="link-type"
							class="form-control form-control-lg">
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May </option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">Auguest</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
						<button type="submit" style="float:right;">Filter</button>
					</form>





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
            if($month == 0){
				$result = mysqli_query($conn, "SELECT  categories.Category_name, SUM(`expense-entry`.Amount) AS Total FROM categories, `expense-entry` WHERE categories.id=`expense-entry`.Category_id GROUP BY Category_id;;");
			}
			else{
				$result = mysqli_query($conn, "SELECT  categories.Category_name, SUM(`expense-entry`.Amount) AS Total FROM categories, `expense-entry` WHERE categories.id=`expense-entry`.Category_id AND MONTH(Date)=$month GROUP BY Category_id;;");
			}
            if (mysqli_num_rows($result) > 0) {
            ?>

			<!-- SELECT `expense-entry`.Category_id, SUM(`expense-entry`.Amount) AS Total FROM `expense-entry` GROUP BY Category_id; -->

			<table id="table-design">
				<tr>

					<th>Category Name</th>
					<th>Total</th>

				</tr>
				<?php
	            $i = 0;
	            while ($row = mysqli_fetch_array($result)) {
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
            } else {
	            echo "No result found";
            }
            ?>
		</div>
	</div>






	</div>

	<div class="row" class="footer">
		<?php include 'footer.php' ?>

	</div>
</body>

</html>