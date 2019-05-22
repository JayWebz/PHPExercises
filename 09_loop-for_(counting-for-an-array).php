<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loop - For (counting through an array)</title>

</head>

<body>
<?php
$items = array('this', 'that', 'the other');
/*print_r($items);
echo "<br />".$count = count($items);*/

for($i=0; $i <= count($items)-1; $i++){
	echo $items[$i]."<br />";
}
?>
</ul>
</body>
</html>