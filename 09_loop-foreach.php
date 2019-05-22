<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loops - Foreach</title>
</head>

<body>

<?php
//Foreach (Indexed Arrays)
$animals = array('dogs', 'cats', 'fish');
/*foreach($array_name as $temp_value_var){
	do something with $temp_value_var;
}*/
foreach($animals as $thisAnimal){
	echo "<li>".$thisAnimal."</li>";
}
?>


<?php
//Foreach (Associative Arrays)
$animals = array(
	//the key is to => the value
	'dogs' => 'loyal',
	'cats' => 'lazy',
	'fish' => 'oily'
);

foreach($animals as $key=>$value){
	echo "<p>".ucwords($key)." are ".$value." pets</p>";
}

?>
</body>
</html>