<br>
	<ul class="first-ul">

		
  		<?php writeNavLinkA("Home Page", "/index.php");?><br><br></li>


 		 <?php writeNavLinkA("Get Started", "/get-started/index.php");?>
    			<ul class="second-ul">
				<li>
					<ul class="secondB-ul">
						<?php
						switch ($_SERVER['SCRIPT_NAME']) 
						{
							case "/get-started/index.php":
							case "/get-started/move/index.php":
							case "/get-started/finances/index.php":
							case "/communities/living-options/index.php":
							case "/get-started/legal/index.php":
							case "/get-started/settle-in/index.php":
							case "/resources.php":
								echo 
						writeNavLink("Move", "/get-started/move/index.php");
      						writeNavLink("Finances", "/get-started/finances/index.php");
      						writeNavLink("Living Options", "/communities/living-options/index.php");
						writeNavLink("Legal", "/get-started/legal/index.php");
						writeNavLink("Settle In", "/get-started/settle-in/index.php");
						writeNavLink("Resources", "/resources.php");
								break;
								default:
									echo '';
								break;
						}
						?>



					</ul>
				</li>
				<?php writeNavLinkA("About Us", "/get-started/about.php");?>
					<ul class="third-ul">
						<?php
						switch ($_SERVER['SCRIPT_NAME']) 
						{
							case "/get-started/about.php":
							case "/get-started/values.php":
							case "/get-started/team.php":

								echo 
						writeNavLink("Our Values", "/get-started/values.php");
      						writeNavLink("Our Team", "/get-started/team.php");
      						
								break;
								default:
									echo '';
								break;
						}
						?>
					</ul>

				</li>	
			</ul>
		</li>
  		<?php writeNavLinkA("Our Communities", "/communities/index.php");?>
    			<ul class="second-ul">

				<?php writeNavLinkA("Locations", "/communities/locations/index.php");?>
					<ul class="third-ul">
						<?php
						switch ($_SERVER['SCRIPT_NAME']) 
						{
							
case "/communities/index.php":
							case "/communities/locations/index.php":
							case "/communities/locations/omak/index.php":
							case "/communities/locations/omak/features-amenities.php":
							case "/communities/locations/omak/slideshow.php":
							case "/communities/locations/omak/menu.php":
							case "/communities/locations/omak/request-brochure.php":
							case "/communities/locations/shelton/index.php":
							case "/communities/locations/shelton/features-amenities.php":
							case "/communities/locations/shelton/slideshow.php":
							case "/communities/locations/shelton/menu.php":
							case "/communities/locations/shelton/request-brochure.php":
							case "/communities/locations/normandy-park/index.php":
							case "/communities/locations/normandy-park/features-amenities.php":
							case "/communities/locations/normandy-park/slideshow.php":
							case "/communities/locations/normandy-park/menu.php":
							case "/communities/locations/normandy-park/request-brochure.php":
							case "/communities/locations/maple-valley/index.php":
							case "/communities/locations/maple-valley/features-amenities.php":
							case "/communities/locations/maple-valley/slideshow.php":
							case "/communities/locations/maple-valley/menu.php":
							case "/communities/locations/maple-valley/request-brochure.php":
							case "/communities/locations/colville/index.php":
							case "/communities/locations/colville/features-amenities.php":
							case "/communities/locations/colville/slideshow.php":
							case "/communities/locations/colville/menu.php":
							case "/communities/locations/colville/request-brochure.php":
							case "/communities/locations/washougal/index.php":
							case "/communities/locations/washougal/features-amenities.php":
							case "/communities/locations/washougal/slideshow.php":
							case "/communities/locations/washougal/menu.php":
							case "/communities/locations/washougal/request-brochure.php":
							case "/communities/locations/portland/index.php":
							case "/communities/locations/portland/features-amenities-IL.php":
							case "/communities/locations/portland/features-amenities-AL.php":
							case "/communities/locations/portland/slideshow.php":
							case "/communities/locations/portland/menu.php":
							case "/communities/locations/portland/request-brochure.php":
							case "/communities/locations/hawthorne-gardens-portland/index.php":
							case "/communities/locations/hawthorne-gardens-portland/features-amenities-IL.php":
							case "/communities/locations/hawthorne-gardens-portland/features-amenities-AL.php":
							case "/communities/locations/hawthorne-gardens-portland/slideshow.php":
							case "/communities/locations/hawthorne-gardens-portland/menu.php":
							case "/communities/locations/hawthorne-gardens-portland/request-brochure.php":
							case "/communities/locations/burlington/index.php":
case "/communities/locations/burlington/features-amenities-IL.php":
case "/communities/locations/burlington/features-amenities-AL.php":
case "/communities/locations/burlington/slideshow.php":
case "/communities/locations/burlington/dining-menu.php":
case "/communities/locations/burlington/request-brochure.php":
case "/communities/locations/antioch/index.php":
case "/communities/locations/antioch/features-amenities-IL.php":
case "/communities/locations/antioch/features-amenities-AL.php":
case "/communities/locations/antioch/slideshow.php":
case "/communities/locations/antioch/dining-menu.php":
case "/communities/locations/antioch/request-brochure.php":
case "/promotions/guarantee.php":
							
case "/promotions/free-lunch.php":
								

echo 
						writeNavLink("Omak, WA", "/communities/locations/omak/index.php");
						writeNavLink("Shelton, WA", "/communities/locations/shelton/index.php");
      						writeNavLink("Normandy Park, WA", "/communities/locations/normandy-park/index.php");
      						writeNavLink("Maple Valley, WA", "/communities/locations/maple-valley/index.php");
						writeNavLink("Colville, WA", "/communities/locations/colville/index.php");
						writeNavLink("Washougal, WA", "/communities/locations/washougal/index.php");
						writeNavLink("Portland (NW), OR", "/communities/locations/portland/index.php");
						writeNavLink("Portland (SE), OR", "/communities/locations/hawthorne-gardens-portland/index.php");
						writeNavLink("Burlington, WA", "/communities/locations/burlington/index.php");
						writeNavLink("Antioch, CA", "/communities/locations/antioch/index.php");
						
								break;
								default:
									echo '';
								break;
						}
						?>
					</ul>
				</li>
				<?php writeNavLinkA("Living Options", "/communities/living-options/index.php");?>
      					<ul class="third-ul">
						<?php
						switch ($_SERVER['SCRIPT_NAME']) 
						{
							case "/communities/index.php":
							case "/communities/living-options/index.php":
							case "/communities/living-options/cottages.php":
							case "/communities/living-options/independent-living.php":
							case "/communities/living-options/assisted-living.php":
							case "/communities/living-options/memory-care.php":
							case "/communities/living-options/skilled-nursing.php":
						
								echo 
						writeNavLink("Cottages", "/communities/living-options/cottages.php");
      						writeNavLink("Independent Living", "/communities/living-options/independent-living.php");
      						writeNavLink("Assisted Living", "/communities/living-options/assisted-living.php");
      						writeNavLink("Memory Care", "/communities/living-options/memory-care.php");
						writeNavLink("Skilled Nursing", "/communities/living-options/skilled-nursing.php");
								break;
								default:
									echo '';
								break;
						}
						?>
    					</ul>
				</li>
			</ul>
		</li>
			

  		<?php writeNavLinkA("Wellness Atmosphere", "/wellness/index.php");?>
    			<ul>
				<li>
					<ul class="secondB-ul">
						<?php
						switch ($_SERVER['SCRIPT_NAME']) 
						{
							case "/wellness/index.php":
							case "/wellness/physical-health.php":
							case "/wellness/mental-health.php":
							case "/wellness/social-life.php":
							case "/wellness/spirituality.php":
							case "/wellness/culinary-experience.php":
								echo 
      						writeNavLink("Physical Health", "/wellness/physical-health.php");
						writeNavLink("Brain Power", "/wellness/mental-health.php");
						writeNavLink("Social Connections", "/wellness/social-life.php");
						writeNavLink("Spirituality", "/wellness/spirituality.php");
						writeNavLink("Culinary Experience", "/wellness/culinary-experience.php");
								break;
								default:
									echo '';
								break;
						}
						?>
					</ul>
				</li>
			</ul>
		</li>

			
	</ul>	

<div id="share-box">
	<ul class="career-ul">
		<?php writeNavLink("Contact Us", "/contact.php");?>
      		<?php writeNavLink("Request a Brochure", "/request-brochure.php");?>
		<?php writeNavLink("Free Lunch &amp; Tour", "/promotions/free-lunch.php");?>
		<?php writeNavLink("60 Day Guarantee", "/promotions/guarantee.php");?>
	</ul>
</div>


<!-- AddThis Button BEGIN -->
<div id="share-box">
<div class="addthis_toolbox">   
    <div class="custom_images">
	
	<b>Share This Page</b>
	<a class="addthis_button_twitter">
		<img src="http://www.artegan.com/images/common/twitter.png" alt="Twitter" height="25px" width="25px" /></a>
	<a class="addthis_button_facebook">
		<img src="http://www.artegan.com/images/common/facebook.png" alt="Facebook" height="25px" width="25px" /></a>
	<a class="addthis_button_stumbleupon">
		<img src="http://www.artegan.com/images/common/stumbleupon.png" alt="Stumbleupon" height="25px" width="25px" /></a>
	<a class="addthis_button_digg">
		<img src="http://www.artegan.com/images/common/digg.png" alt="Digg" height="25px" width="25px" /></a>
	<br><br>
	<div class="addthis_toolbox addthis_default_style">
	<a class="addthis_button_email" style="padding-right:10px; padding-left:12px;"> Email </a>
	 <a class="addthis_button_print"> Print</a><br>


<!-- Bookmark Script: http://javascript.internet.com -->
<!-- Original:  etLux -->
<!-- Web Site:  http://www.jscode.com -->

<script language="JavaScript">
<!--
// message to show in non-IE browsers
var txt = "Bookmark"
// do not edit below this line
// ===========================


var url = this.location;
var who = document.title;
var ver = navigator.appName
var agt=navigator.userAgent
var num = parseInt(navigator.appVersion)
if ((ver == "Microsoft Internet Explorer")&&(num >= 4)) {
   document.write('<A HREF="javascript:window.external.AddFavorite(url,who);" ');
   document.write('onMouseOver=" window.status=')
   document.write("txt; return true ")
   document.write('"onMouseOut=" window.status=')
   document.write("' '; return true ")
   document.write('">'+ txt + '</a>')
}
else if (agt.indexOf("Macintosh")!=-1){
   txt += "  (Command+D)"
   document.write(txt)
} 
else{
   txt += "  (Ctrl+D)"
   document.write(txt)
} 
//-->
</script>

		</div>

    </div>
</div>





</div>

<script type="text/javascript" src="http://www.artegan.com/js/addthis_widget.js"></script>
<!-- AddThis Button END -->
			
<!--end left-nav div-->
</div>








		<!--end left-col div-->
		</div>
		
		

<!--RIGHT COLUMN-->
				
<div id="right-col" class="eq-height">				

<div id ="groupnav">


		

