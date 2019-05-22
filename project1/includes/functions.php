<?php
//----- PAGE NAMING FUNCTION -----//
	function pageName() {
		$page = basename($_SERVER['PHP_SELF'], '.php');
		
		global $pageTitle;
		global $pageClass;
		
		switch ($page) {
			case 'scripting':
			case 'responsive_web_design':
			case 'web_CMS':
				$pageTitle = ucwords(str_replace('_', ' ', $page));
				$pageClass = $page;
				break;
			default:
				$pageTitle = "Home Page";
				$pageClass = "Home";
				break;
		}
	}
//----- END PAGE NAMING FUNCTION -----//

//----- COPYRIGHT FUNCTION -----//
	function copyright() {
		ini_set('date.timezone', 'America/Los_Angeles');
		global $copyright;
		$startYear = 2016;
		$thisYear = date('Y');
		
		$copyright = $startYear == $thisYear ? $startYear : ($startYear.' - '.$thisYear);
	}

//----- END COPYRIGHT FUNCTION -----//

//----- DISPLAY IMAGES FUNCTION -----//
	//creating/declaring the function
	function displayImages($albumDir, $whichGallery, $displayMode) {
		// create var to store name of folder where album of galleries is located
		$album = $albumDir.'/';
		
		//store value of the current target directory
		$targetGallery = $whichGallery.'/'; //pulled from a function argument 1
		
		//set currently selected gallery's pathway
		$currentGalleryPath = $album.$targetGallery;
		
		$large = 'large/'; //large images for cover background images (1800+px)
		$medium = 'medium/'; //standard size (max = 1100w)	
		$small = 'small/'; //thumbnail for lightbox styled gallery (max. - 200w)
		
		//store dir to be scanned for contents into an array variable
		$imageList = scandir($currentGalleryPath.$small);
		
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
			
			//create $title of album to use for image gallery info below
			$title = ucwords(str_replace($characters,' ', $whichGallery));
		?>
		<?php switch ($displayMode) {
		case 'img':
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
		<p class="random-image"><img src="<?php echo $currentGalleryPath.$small.rawurlencode($image) ?>" alt="<?php echo $alt ?>"></p>
		<?php break; ?>
		<?php
		case 'background':
		//----- GRAB RANDOM IMAGE FOR BACKGROUND -----//
		$image = $imageList[array_rand($imageList)]; ?>
		<style>
			div#content {
				background: url(<?php echo $currentGalleryPath.$large.rawurlencode($image) ?>) no-repeat center center;	
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		</style>
		<?php break; ?>
		<?php
		case 'lightbox':
		// ----- GENERATE THUMBNAIL GALLERY ----- //
		
		//call out globals for the lightbox switch case
		global $jquery, $lightbox;
		//test to see if jquery library has been called
		if (!isset($jquery)) {
			echo '<script src="js/jquery-3.1.1.min.js"></script>'."\n";
			$jquery = true;
		}
		//test to see if lightbox library has been called
		if (!isset($lightbox)) {
			echo '<script src="js/lightbox.js"></script>'."\n";
			echo '<link href="css/lightbox.css" rel="stylesheet">'."\n";
			$lightbox = true;
		}
		?>
		<ul class="gallery">
			<?php
				foreach ($imageList as $image){ 
					//create alt text for image
					$alt = str_replace($fileExt, '', $image);
					$alt = ucwords(str_replace($characters, ' ', $alt));
			?>
				<li>
					<a href="<?php echo $currentGalleryPath.$medium.rawurlencode($image); ?>" title="<?php echo $alt; ?>" data-lightbox="<?php echo $title; ?>" >
						<img src="<?php echo $currentGalleryPath.$small.rawurlencode($image) ?>" alt="<?php echo $alt; ?>">
					</a>
				</li>
			<?php } break; ?>
		</ul>
        
        <?php 
		case 'slideshow':
		//call out globals for the lightbox switch case
			global $jquery, $slideshow;
			//test to see if jquery library has been called
			if (!isset($jquery)) {
				echo '<script src="js/jquery-3.1.1.min.js"></script>'."\n";
				$jquery = true;
			}
			//test to see if lightbox library has been called
			if (!isset($slideshow)) {
				echo ' <script src="js/cycle2.min.js"></script>'."\n";
				echo '<link href="css/cycle2.css" rel="stylesheet">'."\n";
				$slideshow = true;
			}
		?>      
                <div class="cycle-slideshow" data-cycle-fx=fadeout data-cycle-speed=1500 Horz data-cycle-timeout=4000>
                    <!-- empty element for overlay -->
                    <div class="cycle-overlay"></div>
                <?php foreach ($imageList as $image){ 
					//create alt text for image
					$alt = str_replace($fileExt, '', $image);
					$alt = ucwords(str_replace($characters, ' ', $alt)); ?>
                    <img src="<?php echo $currentGalleryPath.$small.rawurlencode($image); ?>" data-cycle-title="<?php echo $title; ?>" data-cycle-desc="<?php echo $alt; ?>">
                <?php } //end foreach ?>
                </div>
<?php break; ?>
		<?php
		
		}//END SWITCH $displayMode
		} else {
			//print this to screen if the directories cannot be found.
			echo "<p>The selected gallery is not available.</p>";	
		}//END file_exists() FUNCTION
	}//END displayImages() FUNCTION
//----- END DISPLAY IMAGES FUNCTION -----//
?>