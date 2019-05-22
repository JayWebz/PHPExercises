<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$a = 10;
	$b = 15;
	$c = "15";
	
	if (($a === 10) || ($b === $c)){
		echo "This expression is true";	
	} else {
		echo "Sadly, this expression is false.";	
	}
	
	echo "<br /><br />";
	
	if (!isset($username)){ //if username is not set
		echo "Please go to the login page"; //will echo statement
	} else { //otherwise
		echo "Hello $username"; //will echo statement.	
	}
	
	echo "<br /><br />";
	
	if ((isset($c)) && (is_int($c))){
		echo "$c is an integer";	
	} else {
		//$c = (int) $c;
		settype($c, "int");
		$type = gettype($c);
		echo "\$c was converted to the <strong>integer</strong> format and is now $c.";	
	}
?>
</body>
</html>