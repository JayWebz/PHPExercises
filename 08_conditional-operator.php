<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>08 Conditional Operator</title>
</head>

<body>
<?php
ini_set('date.timezone', 'America/Los_Angeles');
echo date('Y');
echo"<br />";

	$startYear = 2008;
	$thisYear = date('Y');
	
	$copyright = $startYear == $thisYear ? $startYear : ($startYear.' - '.$thisYear);
	echo $copyright;

?>
<p>&copy;<?php  $copyright; ?> Your Name Here</p>

</body>
</html>