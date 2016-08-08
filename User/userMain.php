<!DOCTYPE>
<html>
	<head>
	</head>

	<body>
		<h1 style= "margin:auto; width: 50%; text-align: center; padding:0 0 10px 0;">Vehicle Registration</h1>
		<?php
			/*Display errors on page*/
			ini_set('display_errors', 'On');
			/*Set connection variables*/
			$hostname='127.0.0.1';
			$username='kalasamc_ishaaq';
			$password='416punchme';
			$dbname='kalasamc_Vehicle';

			$conn = new mysqli($hostname, $username, $password, $dbname);

			if ($conn->connect_error){
				die("Connection failed : " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM userInfo";

			$result = mysqli_query($conn, $sql);

			/*Check to see if it got any rows from the query */
			if (mysqli_num_rows($result) > 0) {	
			/*Print the headers for the table*/	
				echo '<style> table, th, td { border: 1px solid black; border-collapse: collapse;}</style> 
				<table style="width:100%"> 
				<tr><th> ID </th>
				<th> Employee ID </th>
				<th> First name </th>
				<th> Middle Name</th>
				<th> Last Name </th>
				<th> Title </th>
				<th> Login ID <th>
				<th> Password </th>
				<th> Security Level </th>
				<th> Personal Phone Number </th>
				<th> Home Phone Number </th>
				<th> Office </th>
				<th> Home Address </th>
				<th> Social Security Number </th>
				<th> Date of Birth </th>
				<th> Driving Licence </th>
				<th> Home City </th>
				<th> Province </th>
				<th> Postal Code </th>
				<th> Personal Email </th>
				<th> Company Email </th>
				<th> Start Date </th>
				<th> Status </th>
				<th> Notes </th></tr>';

				while($row = mysqli_fetch_array($result)){
					echo '<tr><td>'. 
					$row["ID"].  '</td><td>' .
					$row["Emp_ID"]. '</td><td>' .
					$row["First_Name"]. '</td><td>' .
					$row["Middle_Name"]. '</td><td>' .
					$row["Last_Name"]. '</td><td>' .
					$row["Title"]. '</td><td>' .
					$row["LoginID"].  '</td><td>' .
					$row["Password"]. '</td><td>' .
					$row["Security_Level"]. '</td><td>' . 
					$row["Personal_Phone"]. '</td><td>' .
					$row["Home_Phone"]. '</td><td>' .
					$row["Office"]. '</td><td>' .
					$row["Re_Registration_Date"]. '</td><td>' .
					$row["Home_Address"]. '</td><td>' .
					$row["SSN"]. '</td><td>' .
					$row["Date_of_Birth"]. '</td><td>' .
					$row["Driving_License"]. '</td><td>' .
					$row["Home_City"]. '</td><td>' .
					$row["Province"]. '</td><td>' . 
					$row["Postal_Code"]. '</td><td>' . 
					$row["Country"]. '</td><td>' . 
					$row["Personal_Email"]. '</td><td>' . 
					$row["Company_Email"]. '</td><td>' . 
					$row["Start_Date"]. '</td><td>' . 
					$row["Status"]. '</td><td>' . 
					$row["Notes"]. '</td></tr>';

				}
				echo '</table><br>';
			/*If there is zero rows resulted from the query, announce this */
			} else {
				echo "0 results";
			}
			/*Close the connection*/
			mysqli_close($conn);
		?>
		<style> 
		div {margin: auto;
    				width: 50%;
    				border: 3px solid green;
    				padding: 10px;
					}
		</style>
		<div>
			<form action="addUser.php" method="post">
			<input type="submit" value="Add a User">
			</form>
			<form action="deleteUser.php" method="post">
				Enter an ID value: <input type="number" name="idDelete">
				<input type="submit" value="Remove a user">
			</form>
			<form action="changeUser.php" method="post">
				Enter an ID value: <input type="number" name="idChange">
				<input type="submit" value="Change a user">
			</form>
		</div>
	</body>