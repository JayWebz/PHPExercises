<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>displayImages Function</title>
</head>

<body>
<pre>
<?php 
	// create var to store name of folder where album of galleries is located
	$album = 'galleries/'; //later this will be grabbed from a function argument.
	
	//store value of the current target directory
	$targetGallery = 'responsive_design/'; //later this will be grabbed from a function argument.
	
	$large = 'large/'; //large images for cover background images (1800+px)
	$medium = 'medium/'; //standard size (max = 1100w)	
	$small = 'small/'; //thumbnail for lightbox styled gallery (max. - 200w)
	
	//store dir to be scanned for contents into an array variable
	$imageList = scandir($album.$targetGallery.$medium);
	
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
			echo "These are bad file types: {$filename} <br>";
			print_r($size);
			}
		}
	}
	//unwanted so far
	print_r ($unwanted);
	
	//scandir (scan directory) is capable of scanning relative paths
	print_r ($imageList);
	
?>
</pre>
</body>
</html>