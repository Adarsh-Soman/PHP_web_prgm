<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculator</title>
	<style>
			body{
		
				margin-top: 40px;
		
			}
			.container{
			  
				margin-left: 20%;	
				position: relative;
				padding: 50px;
				width: 700px;
				height: 500px;
				box-shadow: 10px 10px 10px rgba(0, 0, 0, .1),
							-10px -10px 10px rgba(255, 255, 255, 1),
							inset 10px 10px 10px  rgba(0, 0, 0, .1),
							inset -10px -10px 10px rgba(255, 255, 255, 1);
				border-radius: 10px;
				
			}
			.result{
				font-size: 30px;
				font-family: serif;
				font-weight: 400px;
			}
		</style>
</head>
<body>
	<div class="container">
		<center>
	<h1>Electricity Bill Calculator</h1>
	<div class="result">
	<?php
		if (isset($_POST['previous_reading']) && isset($_POST['current_reading'])) {
			$previous_reading = $_POST['previous_reading'];
			$current_reading = $_POST['current_reading'];
			$units = $current_reading - $previous_reading;
			$rate_per_unit = 5; // Replace with actual rate per unit
			$bill_amount = $units * $rate_per_unit;
			echo "Previous Reading: " . $previous_reading . "<br>";
			echo "Current Reading: " . $current_reading . "<br>";
			echo "Units Consumed: " . $units . "<br>";
			echo "Rate per Unit: " . $rate_per_unit . "<br>";
			echo "Bill Amount: " . $bill_amount . "<br>";
		}
	?>
	</div>
	</center>
	</div>
</body>
</html>
