<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<?php
	$page = str_replace('_', ' ', basename($_SERVER['SCRIPT_NAME'], '.php'));
	$page = ucwords($page);
?>
<title><?php echo $page; ?></title>
</head>

<body>
<?php 

/*Switch statement - a substition for an if/else statement. 
has some restrictions:
-Only test one case
-Can't test anything with comparison values

Can evaluate if a is something or is not something in several instances...
*/
	/*$a = '2';
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
	}*/
	
	//Super Global Arrays
	//always preceded by a $ and an _
	/*echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";*/
	
	$page = $_SERVER['SCRIPT_NAME'];
	echo $page;
	echo "<br />";
	
	//using basename
	
	$page = str_replace('_', ' ', basename($_SERVER['SCRIPT_NAME'], '.php'));
	echo $page;
	//use str_replace to find a pattern and replace it.
	
	//ucwords() function
	
	echo "<br />";
	
	$page = str_replace('_', ' ', basename($_SERVER['SCRIPT_NAME'], '.php'));
	$page = ucwords($page);
?>
  <img src="images/<?php
	switch ($page) {
		case '08 Switch 01':
			echo "header1.jpg";
			break;
		case '08 Switch 02':
			echo "header2.jpg";
			break;
		default:
			echo "Home Page.";
			break; 
	}	
?>" alt="<?php echo $page;?>" width="800" height="200"/>

</body>
</html>