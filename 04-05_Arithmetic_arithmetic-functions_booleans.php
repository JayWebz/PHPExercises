<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Arithmetic Operators, Integers, and Floats</title>
</head>

<body>

<h1>Arithmetic Operators, Integers, and Floats</h1>
<pre>
= + additon
- = subtraction
* = multiplication
/ = division
% = modulo division
++ = increment (default adds 1)
-- = increment (default subtracts 1)
</pre>
<hr>
<h2>Testing Area</h2>

<?php
	//define variables
	$x = 10;
	$y = 20;
	$z = 4;
?> 

<?php
	//addition and subtraction
	echo $x + $y;
echo"<br>";
	$sum = $x + $y;
	echo $sum;
?>
<hr>
<?php
	//multiplication and division
	$product = $y / $x;
	echo $product;
?>
<hr>
<?php
	//modulo division (returns remainder of division expression)
	echo $x % $z;
	//helpful for alternating patterns
?>
<hr>
<?php
	//increment and decrement
	$x++;
	echo $x;
	echo"<br>";
	echo $x--;
	echo"<br>";
	echo --$x;
	//doesn't take effect until the command is terminated first
?>
<hr>
<?php 
	//combining calculation with the assignment operator
	$x += $y;
	echo $x;
?>
<hr>
<hr>
<h1>Arithmetic Functions</h1>
<ul>
	<li>round(value, parameter)</li>
    <li>ceil(value)</li>
    <li>floor(value)</li>
</ul>
<code>$floaty = 4.6288</code>
<hr>

<h2>Testing</h2>
<?php $floaty = 4.6288; ?>

<?php
	// round()
	echo round($floaty, 0);
		//$val will round decimal to a decimal place
?> 
<hr>
<?php
	// ceil()
	echo ceil($floaty);
?> 
<hr>
<?php
	// floor()
	echo floor($floaty);
?> 
<hr>
<?php echo $sum = ceil($floaty) + floor($floaty);
	echo $sum;
 ?>
<?php /*?>
Booleans - a data value that is either set to true or false.
They are logical operators which are case insensitive and are declared without quotations.

Usually used as conditional tests to help the script decide which action to take based on yes/no questions.

Null - Also case insensitive. Typically a value that indicates the absense of something. Does not equate to False.

PHP considers the following false:
-the actual word FALSE outside of quotes
-the integer 0
-the float 0.0
-an empty string
-the one-character string 0
-the constant NULL

Any other variables in a boolean value are considered TRUE.
Functions often return a Boolean variable that you can test to see if a function succeeded or failed.
<?php */?> 


</body>
</html>