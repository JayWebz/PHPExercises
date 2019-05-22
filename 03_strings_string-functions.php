<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Strings</title>
</head>

<body>
<h1>Simple Strings</h1>
<h2>Echo, Print, and Using Curlies</h2>
<?php
	echo "This is a string using echo.";
	print "This is a string using print.";
?>
<br><hr><br>
<h2>Curlies Continued</h2>
<?php
	$my_favorite = "I like Santa.";//variable not echo'd or printed yet and won't populate on it's own.
	echo $my_favorite; //will now populate with this line.
	
echo"<br>";
	
	echo "$my_favorite"; //within double quotes, variable echoes work; could be mixed with another part of a string.
	
echo"<br>";
	
	echo "$my_favorite I also like ice cream."; // will populate as expected.
	
echo"<br>";
	
	echo "{$my_favorite} I also like ice cream."; //curly brace best practice around variables
	
echo"<br>";
	
	$gender = "male";
	echo "The individual in the study is {$gender}.";
	echo"<br>";
	echo "There were 26 {$gender}s in this study.";//need to declare the variable independently of pluralization or other word changes to make sentence output with correct grammar.
?>
<br><hr><br>
<h2>Concatenation</h2>
<?php
	$imgFolder = "images/";
	$thumbs = "thumbs/";
	$fullSize = "large/";
	$filename = "bullet.png";
?>
<a href="<?php echo $imgFolder.$fullSize.$filename; ?>"><img src="<?php echo $imgFolder.$thumbs.$filename; ?>" alt=""></a>

<br><hr><br>

<h2>Quotes</h2>
<p><strong>Double Quotes:</strong></p>
<?php
	//Single ' ' ... reads literal text. doesn't read variables
	//Double " " ... reads PHP directives and text/numbers/regular characters
	
	$name = "Marcus";
	echo "My name is {$name}.";
?>
<p><strong>Single Quotes:</strong></p>
<?php
	$name = 'Marcus';
	echo 'My name is {$name}.';
?>

<h2>Quotes within quotes</h2>
<?php
$show = "Frasier";
echo 'I was told to watch "'.$show.'" on television.';
?>
<br>
<?php echo "I was told to watch \"$show\" on television."; ?>

<br><hr><br>

<h1>String Functions</h1>
<hr>
<h2>Set the Variables</h2>
<p>In the examples below we have a long string with various cap cases, as well as an example simulating a user putting space characters 9into a username input field. We will use these examples to run string functions on them to see how they are parsed.</p>
<code>$test = "the QUICK brown fox jumps over the LAZY dog.";</code><br>
<code>$username = "   jdoe ";</code>
<?php 
	$test ="the QUICK brown fox jumps over the LAZY dog.";
	$username = "   jdoe ";
?>

<h3>Convert a string to all lower case - strtolower():</h3>
<p><?php  echo strtolower($test); ?></p>

<h3>Convert a string to all upper case - strtoupper():</h3>
<p><?php echo strtoupper($test); ?></p>

<h3>Convert a string to so that first word has an initial cap ucfirst():</h3>
<p><?php echo ucfirst($test); ?></p>

<h3>Convert a string to have all initial caps - ucwords():</h3>
<p><?php echo ucwords($test); ?></p>

<h3>Find the number count of characters in a string - strlen():</h3>
<p><?php echo strlen($test); ?></p>

<h3>Find a string within a string - strstr():</h3>
<p><?php echo strstr($test, "fox"); ?></p>

<h3>Find and replace a string pattern with a new string - str_replace():</h3>
<p><?php echo str_replace("dog", "cat", $test); ?></p>

<h3>Remove whitespace (extra spaces) from the beginning or end of a string.
Print to screen using <code>pre</code> tags to see the whitespace - trim()</h3>

<p>Before:<br>
<pre><?php echo $username; ?></pre>
</p>

<p>After:<br>
<pre><?php echo trim($username); ?></pre>
</p>
</body>
</html>