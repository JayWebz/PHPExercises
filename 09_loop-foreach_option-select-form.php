<?php
if (!empty($_POST) && !empty($_POST['engines'])){
	$address = $_POST['engines'];
	header("Location: {$address}");
	exit;
	//print_r($_POST);
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loops - Foreach - Option/Select Form Using Foreach</title>
</head>

<body>
<?php
	$links = array(
		'Choose an Option'=>'',
		'Big Brother'=>'http://google.com',
		'Oldest Brother'=>'http://yahoo.com',
		'Youngest Brother'=>'http://bing.com'
	);
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" id="form1" name="form1" method="post">
	<label for="engines">Select a Search Engine:</label>
    <select name="engines" id="engines">
    	<?php foreach($links as $name => $url){?>
			<option value="<?php echo $url; ?>"><?php echo $name;?></option>
		<?php }?>
    </select>
    <input type="submit" name="submit" id="submit" value="submit">
</form>
</body>
</html>