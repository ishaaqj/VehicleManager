<html>
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
			$ID = trim($_POST['idDelete']);
			// sql to delete a record
			$sql = "DELETE FROM VehicleInfo WHERE id=$ID";

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