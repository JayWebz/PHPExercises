<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

/*Switch statement - a substition for an if/else statement. 
has some restrictions:
-Only test one case
-Can't test anything with comparison values

Can evaluate if a is something or is not something in several instances...
*/
	$a = '2';
	switch ($a) {
		case 10:
			echo "this is 10.";
			break;
		case 'ten':
			echo "this is a string.";
			break;
		default:
			echo "default returned.";
			break;
	}
?>
</body>
</html>