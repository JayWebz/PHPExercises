<?php
	include('includes/functions.php');
	pageName();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <!--Sets viewport to the device's native width at 100%. 
    	Prevents phones from showing tiny, 'desktop' views.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Google Font link goes here.-->
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

    <!--External stylesheets go here. Use 'reset' and custom stylesheets.-->
    <link href="reset.css" type="text/css" rel="stylesheet">
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body id="<?php echo $pageClass; ?>">
    <!-- ///// Top 'banner' section ////////////////////////////-->
    <section id="banner">
        <header>
        	
            <h1><img src="images/custom-graphic-left.png" alt="custom-graphic on the left side"> <?php echo $pageTitle; ?> <img src="images/custom-graphic-right.png" alt="custom-graphic on the right side"></h1>
        </header>
        <nav id="globalnav" class="null">
        	<a href="#navigate" id="menu">MENU</a>
            <ul>
                <li><a href="index.php">About</a></li>
                <li><a href="scripting.php">Scripting</a></li>
                <li><a href="responsive_web_design.php">Responsive Design</a></li>
                <li><a href="web_CMS.php">WebCMS</a></li>
            </ul>
        </nav>
    </section>