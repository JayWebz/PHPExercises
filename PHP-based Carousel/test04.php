<?php include('includes/functions.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>displayImages Function</title>
<link href="styles.css" rel="stylesheet">
<?php displayImages('galleries', 'responsive_design', 'background'); ?>
</head>

<body>
<section id="content">
<?php displayImages('galleries', 'responsive_design', 'lightbox'); ?>
<?php displayImages('galleries', 'responsive_design', 'img'); ?>
<?php displayImages('galleries', 'responsive_design', 'slideshow'); //use the function ?>  
    
</section>
</body>
</html>