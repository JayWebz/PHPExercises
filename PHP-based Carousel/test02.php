<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>displayImages Function</title>
<link href="styles.css" rel="stylesheet">
</head>

<body>
<section id="content">
	<?php 
	// create var to store name of folder where album of galleries is located
	$album = 'galleries/'; //later this will be grabbed from a function argument.
	
	//store value of the current target directory
	$targetGallery = 'responsive_design/'; //later this will be grabbed from a function argument.
	
	//set currently selected gallery's pathway
	$currentGalleryPath = $album.$targetGallery;
	
	$large = 'large/'; //large images for cover background images (1800+px)
	$medium = 'medium/'; //standard size (max = 1100w)	
	$small = 'small/'; //thumbnail for lightbox styled gallery (max. - 200w)
	
	//store dir to be scanned for contents into an array variable
	$imageList = scandir($currentGalleryPath.$medium);
	
	if (file_exists($currentGalleryPath.$large) &&
		file_exists($currentGalleryPath.$medium) &&
		file_exists($currentGalleryPath.$small)
		
	) {
		
	
	//initiate an empty array for unwanted items
	$unwanted = array();
	//define acceptable filetypes found in key[2] of getimagesize
	$acceptable_arrays = array(1,2,3,6,9);
	//print_r(get_defined_constants());
	//this defines all constants on the page. Look for imagetype to build array from.
	
	//loop through $imageList to remove unwanted items
	foreach ($imageList as $filename) {
		//check to see if item starts with '.' or if is a directory
		if ((strpos($filename,'.') == 0) || is_dir($filename)) {
			//push item into unwanted array
			array_push($unwanted, $filename);	
			//compare current state of $imageList to current state of $unwanted and strip unwanted items from $imageList
			$imageList = array_diff($imageList, $unwanted);
		} else {
			//store the file info inside $size array using getimagesize
			$size = getimagesize($album.$targetGallery.$medium.$filename);	
			if (!$size[2] || !in_array($size[2], $acceptable_arrays)) {
				array_push($unwanted, $filename);	
				$imageList = array_diff($imageList, $unwanted);
			}
		}
	}
	?>

	<?php 
        // ----- CREATE FILTERING ARRAYS TO BE USED LATER ----- //
        $fileExt = array('.jpg', '.jpeg', '.png', '.bmp', '.gif'); //for stripping extensions for alt text
        $characters = array('-', '_'); //stripping out special characters in filename for alt text
        
    ?>
    
    <?php
        //----- GRAB RANDOM IMAGE FOR IMG -----//
            //testing how array_rand() works ... returns numeric key integer
            //echo "THIS IS THE RANDOM KEY PULLED: ";
            //$randomKey = array_rand($imageList);
            //$image = $imageList[$randomKey];
        
        //grab random image from $imageList
        $image = $imageList[array_rand($imageList)];
        
        //create alt text for image
        $alt = str_replace($fileExt, '', $image);
        $alt = ucwords(str_replace($characters, ' ', $alt));
    ?>
    <p class="random-image"><img src="<?php echo $currentGalleryPath.$medium.rawurlencode($image) ?>" alt="<?php echo $alt ?>"></p>
    <hr>
	
    <?php
	//----- GRAB RANDOM IMAGE FOR BACKGROUND -----//
	$image = $imageList[array_rand($imageList)]; ?>
	<style>
		body {
			background: url(<?php echo $currentGalleryPath.$large.rawurlencode($image) ?>) no-repeat center center;	
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
    </style>
	
	<?php
    // ----- GENERATE THUMBNAIL GALLERY ----- //
	// announce the gallery
	
	?>
    <h2 class="gallery"><?php echo $targetGallery; ?></h2>
    <ul class="gallery">
		<?php
            foreach ($imageList as $image){ 
				//create alt text for image
        		$alt = str_replace($fileExt, '', $image);
       			$alt = ucwords(str_replace($characters, ' ', $alt));
		?>
            <li>
            	<a href="<?php echo $currentGalleryPath.$medium.rawurlencode($image); ?>" title="<?php echo $alt ?>">
                	<img src="<?php echo $currentGalleryPath.$small.rawurlencode($image) ?>" alt="<?php echo $alt ?>">
            	</a>
            </li>
        <?php } ?>
    </ul>
    
	<?php
	} else {
		//print this to screen if the directories cannot be found.
		echo "<p>The selected gallery is not available.</p>";	
	}
	?>
</section>
</body>
</html>