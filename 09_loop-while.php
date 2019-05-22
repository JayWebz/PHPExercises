<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loop - While</title>
<style>
	.even, .odd {
		text-align: center;
		padding: 5px;
		width: 100px;
		list-style-type: lower-greek;	
	}
	
	.even {
		color: #555555;
	}
	
	.odd {
		background-color: #555555;
		color: #ffffff;	
	}

</style>

</head>

<body>
<?php
//initialize variables
$a = 0; //counter
$b = 30;

//While Loop
//syntax
/*
while(test_evaluates_to_be_true){
	do_something;
}
*/?>
<ul>
	<?php while($b >= $a){
		$remainder = $a % 2;
		if ($remainder == 0){
			$class = 'even';	
		} else {
			$class = 'odd';	
		}
		?>
        	<li class="<?php echo $class; ?>"><?php echo $a; ?></li>
        <?php $a++;	
	}//end while loop
?>
</ul>
</body>
</html>