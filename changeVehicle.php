<!DOCTYPE HTML>
<html>
	<head>
		<title>changeVehicle!!!!</title>
	</head>
	<body>
	<?php
		$ID = trim($_POST['idChange']);
		echo '<form action="vehicleChanged.php" method="post">
			ID: <input type="number" name="id" value='. $ID. '><br>
			Make: <input type="text" name="Make"><br>
			Model: <input type="text" name="Model"><br>
			Drivers Licence Type: <input type="text" name="DLT"><br>
			Unit ID: <input type="number" name="Unit_ID"><br>
			Year: <input type="number" name="Year"><br>
			VIN number: <input type="number" name="VIN_Number"><br>
			Registration Number: <input type="number" name="Reg_Number"><br>
			Plate Number: <input type="number" name="Plate_Num"><br>
			Plate Registration Date: <input type="date" name="Plate_Reg_Date"><br>
			Plate Expiration Date: <input type="date" name="Plate_Exp_Date"><br>
			Registration Date: <input type="date" name="Reg_Date"><br>
			Re-Registration Date: <input type="date" name="ReReg_Date"><br>
			Insurance Company: <input type="text" name="Insur_Comp"><br>
			Insurance Date: <input type="date" name="Insur_Date"><br>
			Insurance Expiration Date: <input type="date" name="Insur_Exp_Date"><br>
			Last Oil Change Date: <input type="date" name="Last_Oil"><br>
			Last Oil Change Odometer: <input type="number" name="Last_Oil_Change"><br>
			<input type="submit">
		</form>'
	?>
	</body>
</html>