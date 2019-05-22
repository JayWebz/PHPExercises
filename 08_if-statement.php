<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loops</title>
</head>

<body>
<?php
	$a = 10;
	$b = 15;
	$c = "15 dogs";
	
	/*
		>	greater
		<	less
		>=	greater or equal
		<=	less or equal
		==	is equal? (comparison); is a test. returns a true value or false value
		!=	is not equal
		=== is identical?
		!== is not identical?
		
		identical and equal are not the same things. == would render out $b = $c as true, whereas === would render out false.
		
		= simply an assignment
	*/
	
	/*if(expression is true){
	do something;	
	do something in addition;
	}*/
	
	/*if($a < $b) {
		echo '$a is less than $b.';
	}*/
	
	if($c == $b) {
		echo "<p>$c is equal to $b.</p>";
	}
	
	if($a != $b) {
		echo '<p>$a is not equal to $b.</p>';
	}
	//== and != do not test data types, only values in data types.
	
	if($c !== $b) {
		echo "<p>'$c' is not identical to $b.</p>";
	}
	
	if($a === $b) {
		echo '<p>$a is identical to $b.</p>';
	}
?>
</body>
</html>