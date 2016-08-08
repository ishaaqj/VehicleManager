<!DOCTYPE HTML>
<html>
	<head>

	</head>
	<body>
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
			$sql = "UPDATE VehicleInfo SET Make='$Make', Model='$Model', Driver_Licence_Type='$Driver_Licence_Type', Unit_ID='$Unit_ID', Year='$Year', VIN_Number='$VIN_Number', Registration_Number='$Registration_Number', Plate_Number='$Plate_Number', Plate_Registration_Date='$Plate_Registration_Date', Plate_Expiration_Date='$Plate_Expiration_Date', Registration_Date='$Registration_Date', Re_Registration_Date='$Re_Registration_Date', Insurance_Company='$Insurance_Company', Insurance_Date='$Insurance_Date', Insurance_Expiration_Date='$Insurance_Expiration_Date', Last_Oil_Change_Date='$Last_Oil_Change_Date', Last_Oil_Change_Odometer='$Last_Oil_Change_Odometer' WHERE id=$ID";

			if (mysqli_query($conn, $sql)) {
					 echo "Record updated successfully";
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}
			mysqli_close($conn);
		?>
		<form action="learnphp.php" method="post">
			<input type="submit" value="Go back to main Page">
		</form>
	</body>
</html>