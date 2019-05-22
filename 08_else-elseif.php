<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Else / Elseif</title>
</head>

<body>

<?php
	$a = 10;
	$b = 15;
	$c = "15";
	
	if ($c < $b) {
		echo "<p>'$c' is less than '$b'";
	} elseif ($c === $b) {
		echo "<p>'$c' is identical to '$b'";
	} elseif ($c == $b) {
		echo "<p>'$c' is equal to '$b'";
	} else {
		echo "<p>'$c' is greater than '$b'</p>";	
	} 
?>
</body>
</html>