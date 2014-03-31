<?php $thisPage='shelton';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name="generator" content="Adobe GoLive">
		<meta name="description" content="Senior Living dedicated to Better Living through Health and Wellness, Life Long Learning and Active Life. It's our commitment to keeping you physically well, mentally stimulated and socially engaged."/>
		<title>SArt&#275;gan: Maple Glen in Shelton, WA offers Assisted Living : Slideshow</title>
		


<!--HEAD stuff-->	
	<?php include("../../../sh_includes/head_css.php");?>
	
<!--slideshow script-->	
	<script type="text/javascript">
/***********************************************
* Ultimate Fade-In Slideshow (v1.5): © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/
 
var fadeimages=new Array()
//SET IMAGE PATHS. Extend or contract array as needed
fadeimages[0]=["images/big-slideshow/Shelton-Lobby.jpg", "", ""] //plain image syntax
fadeimages[1]=["images/big-slideshow/Shelton-Lobby-sitting.jpg", "", ""] //image with link syntax
fadeimages[2]=["images/big-slideshow/Shelton-TV-Room1.jpg", "", ""] //image with link and target syntax
fadeimages[3]=["images/big-slideshow/Shelton-TV-room2.jpg", "", ""] //plain image syntax
fadeimages[4]=["images/big-slideshow/Shelton-dining.jpg", "", ""] //plain image syntax
fadeimages[5]=["images/big-slideshow/Shelton-library.jpg", "", ""] //plain image syntax
fadeimages[6]=["images/big-slideshow/Shelton-common2.jpg", "", ""] //plain image syntax
 

 
var fadebgcolor="none"

<!--Rest of Slideshow Movie Script-->	
	<?php include("../../../sh_includes/slideshow-movie-script.php");?> 

</script>

	

	</head>



<!--Body-->

<body>
	
<!--Masthead-->	
	<?php include("../../../sh_includes/masthead-shelton.php") ?>



<!--Top image-->				
			
				<img class="L-photo" src="images/shelton-L.jpg">
				<img class="R-photo" src="images/shelton-R.jpg">						
			<div id="main_nav">
						
<!--Main Nav-->
			<?php include("../../../sh_includes/main_nav.php");?>
<!--end-Main Nav-->
				
			</div>
			
<!--Communities Submenu-->	
	<?php include("../../../sh_includes/communities_submenu.php");?>	
			
			
<!--Text Content-->		
			<div id="content">
				<br>
				
<!--Community Left Menu-->	
	<?php include("../shelton_menu.php");?>						
						
					
							<h1>Slideshow</h1>
							<h3><a class="dk_blue" href="index.php">Maple Glen</a> - Shelton, Washington</h3>
							<p>Welcome to Maple Glen in Shelton, WA! We look forward to meeting you in person for a tour and <a class="dk_blue" href="../../../promotions/free-lunch.php">free lunch</a> and in the meantime invite you to take a virtual stroll through our community. 
<br>
<b>Roll mouse over image to pause the slideshow.</b></p>
							
							
<div align="left">
	

					<script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages, 455, 310, 2, 2000, 1, "")
 
									</script>
					

</div>
<!--end Slideshow-->

				<br>						
							
						
							
 					 		
 			
 			</div>
 			<!--end content-->
 			
 				
	
			
		
		


<!--Footer-->	
				<?php include("../../../sh_includes/footer.php") ?>
				



			
</body>
</html>