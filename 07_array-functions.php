<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Array Functions</title>
</head>

<body>
<?php 

//	Some arrays to work with:

	$numbers = array(1, 8, 3.5, 4, -5, 6.7);
	
	$strings = array("dog", "cat", "bird", "fish");
	
	$mixed = array(0, "john", -6.5, "andy", array(0,2), NULL, 6);
	
	$url = "something.com/products/shoes/athletic/index.php";

//END ARRAYS

//Count Function
echo count($numbers);
//counts the elements in an array
echo "<br>";
echo count($strings);
echo "<hr>";
//Max Function
echo max($numbers);
//will take the highest value
echo "<br>";
echo max($strings);
//after looking for integers, max function will look for highest letter alphabetically
//would select fish in this case
//very small numbers will evaluate higher than text, text will evaluate higher than 0
//beyond 4 decimals, output will render in scientific notation. Run a number format on the output to convert to actual numbers instead.
echo "<br>";

//what happens when there is a nested array
echo max($mixed);
echo "<br>";
echo "<br>";

//Min Function
echo min($mixed);
//returns blank
//remove NULL from the array and -6.5 will be next
echo "<br>";
echo "<br>";

//Sort Function

echo sort($strings);
//this will return 1 (TRUE - Boolean Value) as in, yes, the array is sorted
echo "<br>";
sort($strings);
echo "<pre>";
print_r($strings);
//this will help you figure out what a text value will be numerically
echo "</pre>";
echo "<br>";

//Asort Function
echo "This is an 'ASORT' function: <br>";
asort($mixed);
echo "<pre>";
print_r($mixed);
//will only sort the top-level value
echo "</pre>";
echo "<br>";

echo "This is a 'SORT' function: <br>";
sort($mixed);
echo "<pre>";
print_r($mixed);
//will only sort the top-level value
echo "</pre>";
echo "<hr>";

//Implode Function
//implodes array into a single string
echo implode("<br>\n", $strings);
echo implode(", ", $strings);
echo "<hr>";
//Explode Function
//takes a string and seperate pieces based on repeating pattern into an array
$path = explode("/", $url);
echo "<pre>";
print_r($path);
echo "</pre>";

?>
</body>
</html>