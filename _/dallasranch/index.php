<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://www.artegan.com/communities/locations/antioch/index.php");
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name="generator" content="Adobe GoLive">
		<meta name="description" content="Senior Living dedicated to Better Living through Health and Wellness, Life Long Learning and Active Life. It's our commitment to keeping you physically well, mentally stimulated and socially engaged."/>
		<title>Art&#275;gan: The Commons at Dallas Ranch, located in Antioch, CA offers Independent, Assisted Living, and Memory Care.</title>
		
		

<!--HEAD stuff-->	
	<?php include("../sh_includes/head_css.php");?>	



<!--slideshow script-->	
	<script type="text/javascript">
/***********************************************
* Ultimate Fade-In Slideshow (v1.5): © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/
 
var fadeimages=new Array()
//SET IMAGE PATHS. Extend or contract array as needed
fadeimages[0]=["images/slides/dining-at-dallas-ranch.jpg", "slideshow.php", ""] //plain image syntax
fadeimages[1]=["images/slides/family.jpg", "slideshow.php", ""] //image with link syntax
fadeimages[2]=["images/slides/kitchen-at-dallas-ranch.jpg", "slideshow.php", ""] //image with link and target syntax
fadeimages[3]=["images/slides/hug.jpg", "slideshow.php", ""] //plain image syntax
fadeimages[4]=["images/slides/single-bed-at-dallas-ranch.jpg", "slideshow.php", ""] //plain image syntax

 

 
var fadebgcolor="none"

<!--Rest of Slideshow Movie Script-->	
	<?php include("../sh_includes/slideshow-movie-script.php");?> 

</script>



</head>



<!--Body-->

<body>
	
<!--Masthead-->	
	<?php include("../sh_includes/masthead-antioch.php");?>


<!--Top image-->				
			
				<img class="L-photo" src="images/antioch-L.jpg">
				<img class="R-photo" src="images/antioch-R.jpg">						
			<div id="main_nav">
						
<!--Main Nav-->
			<?php include("../sh_includes/main_nav.php");?>
<!--end-Main Nav-->
				
			</div>
			
<!--Communities Submenu-->	
	<?php include("../sh_includes/communities_submenu.php");?>	
			
			
			
<!--Text Content-->		
			<div id="content">
				<br>


<!--Community Left Menu-->	
	<?php include("../antioch_menu.php") ?>
	
	
							<h1>Antioch, CA : The Commons at Dallas Ranch</h1>



							
							<p>The beautiful city of Antioch, California is located just east of the East Bay, within easy reach of the San Francisco Bay area and all its dining, cultural and, shopping attractions.  Antioch is home to The Commons at Dallas Ranch, a thriving independent and assisted living community.  The well-appointed state-of-the-art design and cordial lifestyle create an experience that sets the senior living standard.   We're <strong><em>Celebrating the ART of Life</em></strong> with book club discussions in the library, cooking classes, socializing on the outdoor courtyard patio, enjoying chef-prepared meals, volunteering for special non-profit causes in the city...and more.  It's all here waiting for you.  Find out about our services and amenities for <a class="dk_blue" href="features-amenities-IL.php">independent living</a> and <a class="dk_blue" href="features-amenities-AL.php">assisted living</a>.</p>

							


								<div id="floatR" style="text-align: center;">
									<script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages, 320, 210, 2, 2500, 1, "R")
 
									</script>
								</div>


							
								<h2>Independent Living</h2>
								<p>Our independent living apartment homes are just right for those looking to exchange the burdens of home ownership for the freedom to do what you want, when you want.  Choose from a variety of floor plans to match your style: studios, comfy one-bedroom, larger one-bedroom or spacious two-bedroom. <br>
							
							<a class="dk_blue" target="blank" href="images/floorplans.pdf">Floor plans</a></p>
							
							
							<h2>Independent Living with Assistance</h2>
								<p>No need to move as personal needs change.  All complimentary amenities are included plus assistance with daily living as needed preserving individual independence.<br>
							
							<a class="dk_blue" target="blank" href="images/floorplans.pdf">Floor plans</a></p>
							
							
							<h2>Memory Care</h2>
								<p>Choose from 32 apartments in The Memory Village, designed especially for those experiencing Alzheimer's disease or other dementias.   With seven courtyard entryways, residents independently choose their environment - the calming and comfortable inside or the lovely outside fresh air.<br>
							
							<a class="dk_blue" target="blank" href="images/floorplans.pdf">Floor plans</a></p>
							
							<h2>Compliments of The Commons at Dallas Ranch</h2>
								<p>Many residents don't require any personal assistance.  They do enjoy taking advantage of our complimentary offerings:</p>
								<ul>
									<li>Weekly bed linen & towel service</li>
									<li>Weekly housekeeping apartment & bath</li>
									<li>Daily tidy service (beds, trash, freshen bathroom)</li>
									<li>Conveniently located full laundry rooms each floor</li>
									<li>Three delicious meals served daily</li>
									<li>Transportation and valet shuttle</li>
									<li>Daily, weekly and monthly exercise and activity programs</li>
								</ul>
								
							
	


								



							
						
								
								

											<br style="clear: right;">					
						
								
						
							
 					 		
 			
 			</div>
 			<!--end content-->
 			
 				
	
			
		
		


<!--Footer-->	
				<?php include("../sh_includes/footer.php") ?>
				



			
</body>
</html>