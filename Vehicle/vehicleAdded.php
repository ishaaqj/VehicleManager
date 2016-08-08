<!DOCTYPE html>
<html>
	<body>
		<h1> Hello! </h1>
		<h2> Hi! </h2>
		<?php
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
			$ID = trim($_GET['id']);
			$Make = trim($_GET['Make']);
			$Model = trim($_GET['Model']);
			$Driver_Licence_Type = trim($_GET['DLT']);
			$Unit_ID = trim($_GET['Unit_ID']);
			$Year = trim($_GET['Year']);
			$VIN_Number = trim($_GET['VIN_Number']);
			$Registration_Number = trim($_GET['Reg_Number']);
			$Plate_Number = trim($_GET['Plate_Num']);
			$Plate_Registration_Date = trim($_GET['Plate_Reg_Date']);
			$Plate_Expiration_Date = trim($_GET['Plate_Exp_Date']);
			$Registration_Date = trim($_GET['Reg_Date']);
			$Re_Registration_Date = trim($_GET['ReReg_Date']);
			$Insurance_Company = trim($_GET['Insur_Comp']);
			$Insurance_Date = trim($_GET['Insur_Date']);
			$Insurance_Expiration_Date = trim($_GET['Insur_Exp_Date']);
			$Last_Oil_Change_Date = trim($_GET['Last_Oil']);
			$Last_Oil_Change_Odometer = trim($_GET['Last_Oil_Change']);

			$sql = "INSERT INTO VehicleInfo (ID, Make, Model, Driver_Licence_Type, Unit_ID, Year, VIN_Number,
			Registration_Number, Plate_Number, Plate_Registration_Date, Plate_Expiration_Date, Registration_Date, 
			Re_Registration_Date, Insurance_Company, Insurance_Date, Insurance_Expiration_Date, Last_Oil_Change_Date,
			Last_Oil_Change_Odometer") VALUES ($ID, $Make, $Model, $Driver_Licence_Type, $Unit_ID, $Year, $VIN_Number, $Registration_Number, $Plate_Number, $Plate_Registration_Date, $Plate_Expiration_Date, $Registration_Date, $Re_Registration_Date, $Insurance_Company, $Insurance_Date, $Insurance_Expiration_Date, $Last_Oil_Change_Date, $Last_Oil_Change_Odometer);


			if (mysqli_query($conn, $sql)) {
    			echo "New record created successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		?>
	</body>
</html>