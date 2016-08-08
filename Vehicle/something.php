<html>
	<head>
	</head>
	<body>
	<h1>Hello!</h1>
		<?php
			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
			$hostname='127.0.0.1';
			$username='kalasamc_ishaaq';
			$password='416punchme';
			$dbname='kalasamc_Vehicle';

			/*Establish Connection*/
			$conn = mysqli_connect($hostname, $username, $password, $dbname);

			/*Check if the connection works*/
			if (!$conn) {
				die ("Connection failed: " . $conn->connect_error);
			}
			$ID = trim($_POST['id']);
			$Make = trim($_POST['Make']);
			$Model = trim($_POST['Model']);
			$Driver_Licence_Type = trim($_POST['DLT']);
			$Unit_ID = trim($_POST['Unit_ID']);
			$Year = trim($_POST['Year']);
			$VIN_Number = trim($_POST['VIN_Number']);
			$Registration_Number = trim($_POST['Reg_Number']);
			$Plate_Number = trim($_POST['Plate_Num']);
			$Plate_Registration_Date = trim($_POST['Plate_Reg_Date']);
			$Plate_Expiration_Date = trim($_POST['Plate_Exp_Date']);
			$Registration_Date = trim($_POST['Reg_Date']);
			$Re_Registration_Date = trim($_POST['ReReg_Date']);
			$Insurance_Company = trim($_POST['Insur_Comp']);
			$Insurance_Date = trim($_POST['Insur_Date']);
			$Insurance_Expiration_Date = trim($_POST['Insur_Exp_Date']);
			$Last_Oil_Change_Date = trim($_POST['Last_Oil']);
			$Last_Oil_Change_Odometer = trim($_POST['Last_Oil_Change']);

			$sql = "INSERT INTO VehicleInfo (ID, Make, Model, Driver_Licence_Type, Unit_ID, Year, VIN_Number, Registration_Number, Plate_Number, Plate_Registration_Date, Plate_Expiration_Date, Registration_Date, Re_Registration_Date, Insurance_Company, Insurance_Date, Insurance_Expiration_Date, Last_Oil_Change_Date, Last_Oil_Change_Odometer) VALUES ($ID, '$Make', '$Model', '$Driver_Licence_Type', $Unit_ID, $Year, $VIN_Number, $Registration_Number, $Plate_Number, '$Plate_Registration_Date', '$Plate_Expiration_Date', '$Registration_Date', '$Re_Registration_Date', '$Insurance_Company', '$Insurance_Date', '$Insurance_Expiration_Date', '$Insurance_Expiration_Date', $Last_Oil_Change_Odometer)";


			if (mysqli_query($conn, $sql)) {
    			echo "New record created successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		?>
		<form action="learnphp.php" method="post">
		<input type="submit" value="Go back to main Page">
		</form>
	</body>
</html>