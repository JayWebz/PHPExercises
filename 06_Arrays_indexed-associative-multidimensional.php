<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Arrays</title>
</head>

<body>
<?php
//all arrays have 2 components to each item: key and value
?>

<?php 
/*indexed arrays - Made by assigning a set of values. indexed array keys are always integers. 
*/
//$fruit = array('apples', 'oranges', 'grapes', 'pears');

$fruit[0] = 'apples';
$fruit[1] = 'oranges';
$fruit[2] = 'grapes';
$fruit[3] = 'pears';
?>

<pre>
<?php 
	print_r($fruit); 
	echo "<br />";
	echo $fruit[2];
	
?>
</pre>
<hr>
<?php
//associative arrays

/*can hold other data types for it's keys aside from integers. The keys don't have brackets around them, instead they use quotations.
*/

$employee = array(
	'firstname' => 'Tom',
	'lastname' => 'Robertson',
	'age' => '21',
	'payrate' => '13.5',
	'sex' => 'male',
	'position' => 'cashier',
	'years_service' => '2.5'
);
?>

<pre>
<?php 
	print_r($employee); 
	
	echo "<br />";
	echo '$'.number_format($employee['payrate'], 2);
?>
</pre>
<hr>
<?php
//multidimensional arrays

/*contains at least one nested array as a value to a key; arrays within arrays.
*/

$fruit = array
	(
		"citrus" => array("oranges","lemons","limes"),
		"melons" => array("watermelon","galia","casaba"),
		"berries" => array("currant","raspberry","blueberry",)
	);
	
	echo $fruit['berries'][2];
?>
<pre>
<?php
	print_r($fruit['melons']);
	echo "<br />";
	print_r($fruit['berries'][0]); 
?>
</pre>
</body>
</html>