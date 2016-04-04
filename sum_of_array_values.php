<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sum Of Array Values</title>
</head>
<body>
	<?php
		$numbers = [1,2,5,10,255,3];
		
		$sum = 0;

		foreach ($numbers as $value) {
			$sum += $value;
		}

		echo "The sum of array values is: " . $sum;

	?>
</body>
</html>