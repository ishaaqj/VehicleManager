<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bootstrap 101 Template</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/custom.css" rel="stylesheet">
	    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
			<h1>Vehicle Registration</h1>
			<form action="addVehicle.html" method="post">
			<input type="submit" class="btn btn-default" role="button" value="Add a Vehicle">
			</form>
			<form action="deleteVehicle.php" method="post">
				Enter an ID value: <input type="number" name="idDelete">
				<input type="submit" class="btn btn-default" role="button" value="Remove a vehicle">
			</form>
			<form action="changeVehicle.php" method="post">
				Enter an ID value: <input type="number" name="idChange">
				<input type="submit" class="btn btn-default" role="button" value="Change a vehicle">
			</form>
		</div>
		<div class="row">
			<form action="userMain.php" method="post">
				<input type="submit" class="btn btn-default" role="button" value="View user info!">
			</form>
		</div>
	</div>
	<div class="row">
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<?php
			ini_set('display_errors', 'On');
			$hostname='127.0.0.1';
			$username='kalasamc_ishaaq';
			$password='416punchme';
			$dbname='kalasamc_Vehicle';

			/*Establish Connection*/
			$conn = new mysqli($hostname, $username, $password, $dbname);

			/*Check if the connection works*/
			if ($conn->connect_error) {
				die ("Connection failed: " . $conn->connect_error);
			}

			/*SQL query statement */
			$sql = "SELECT * FROM VehicleInfo";

			/*Taking the result of the sql statement */
			$result = mysqli_query($conn, $sql);

			/*Check to see if it got any rows from the query */
			if (mysqli_num_rows($result) > 0) {	
			/*Print the headers for the table*/	
				echo '
				<table class="table table-bordered"> 
				<tbody>
				<tr><th> Id </th>
				<th class="tex-"> Make </th>
				<th> Model </th>
				<th>Drivers Licence Type</th>
				<th> Unit Id</th>
				<th> Year </th>
				<th> VIN Number </th>
				<th> Registration Number </th>
				<th> Plate Number </th>
				<th> Plate Registration Date </th>
				<th> Plate Expiration Date </th>
				<th> Registration Date </th>
				<th> Re-Registration Date </th>
				<th> Insurance Company </th>
				<th> Insurance Date </th>
				<th> Insurance Expiration Date </th>
					<th> Last Oil Change Date </th>
				<th> Last Oil Change Odometer </th></tr>';

				/*Go through each row using mysqliwith this loop
				mysqli_fetch_array gets each row from the result
				*/
				while($row = mysqli_fetch_array($result)){
					echo '<tr><td>'. 
					$row["ID"].  '</td><td>' .
					$row["Make"]. '</td><td>' .
					$row["Model"]. '</td><td>' .
					$row["Driver_Licence_Type"]. '</td><td>' .
					$row["Unit_ID"]. '</td><td>' .
					$row["Year"]. '</td><td>' .
					$row["VIN_Number"].  '</td><td>' .
					$row["Registration_Number"]. '</td><td>' .
					$row["Plate_Number"]. '</td><td>' . 
					$row["Plate_Registration_Date"]. '</td><td>' .
					$row["Plate_Expiration_Date"]. '</td><td>' .
					$row["Registration_Date"]. '</td><td>' .
					$row["Re_Registration_Date"]. '</td><td>' .
					$row["Insurance_Company"]. '</td><td>' .
					$row["Insurance_Date"]. '</td><td>' .
					$row["Insurance_Expiration_Date"]. '</td><td>' .
					$row["Last_Oil_Change_Date"]. '</td><td>' .
					$row["Last_Oil_Change_Odometer"]. '</td></tr>';
				}
				echo '</tbody>';
				echo '</table><br>';
			/*If there is zero rows resulted from the query, announce this */
			} else {
				echo "0 results";
			}
			/*Close the connection*/
			mysqli_close($conn);
		?>
		</div>
		</div>
	</body>
</html>