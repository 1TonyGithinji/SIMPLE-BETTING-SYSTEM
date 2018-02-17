<!DOCTYPE html>
<html>
<head>
	<title>GRADE</title>
</head>
<body>
	<h1>Kwachua Mamili</h1>
	<h2>Please Enter A number Between 1 and 6 to be the next Lucky Winner</h2>
	<form method="GET">
		<input type="number" name="bet">
		<button>Place Bet</button>
	</form>
	<?php 
		if (isset($_GET['bet'])){
			$money=$_GET['bet'];
			switch ($money) {
				case 1:
					echo "<h3>Please Try Again</h3>";
					break;
				case 2:
					echo "<h3>Confirmed You have won Kshs 300,000</h3>";
					break;
				case 3:
					echo "<h3>Confirmed You have won Kshs 100,000</h3>";
					break;
				case 4:
					echo "<h3>Confirm You Have Won a Toyota TX</h3>";
					break;
				case 5:
					echo "<h3>Confirm You Have Won a Toyota TX</h3>";
					break;
				case 6:
					echo "<h3>Please Try Again</h3>";
					break;
				default:
				echo "Please Enter a number between 1-6!!!";
		}
	}
	 ?>
</body>
</html>