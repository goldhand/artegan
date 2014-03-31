

<?php
//this function is used to write out a navigation a link
//the current page will be tagged with the "Bnavcurrentpage" class so you can change its layout via CSS
function writeBNavLink($text, $path) {
	echo "<a href=\"{$path}\" title=\"{$text}\"";
	if ($_SERVER['SCRIPT_NAME'] == $path) { echo " class=\"Bnavcurrentpage\""; }
	echo ">{$text}</a>";	
}
?>


<div style="clear: both;"></div>

<!--Footer Navigation-->
		<div id="footer-nav">
			<?php writeBNavLink("Home", "/index.php");?>  &nbsp; | &nbsp;
			<?php writeBNavLink("Careers", "/careers.php");?>  &nbsp; | &nbsp;
			<?php writeBNavLink("Resources", "/resources.php");?>  &nbsp; | &nbsp;
			<?php writeBNavLink("Contact", "/contact.php");?>  &nbsp; | &nbsp;
			<?php writeBNavLink("Sitemap", "/sitemap.php");?>  &nbsp; | &nbsp;

		</div>


<!--Copyright-->
		<div id="copyright">&copy; 2009 Art&#275;gan. All rights reserved.
		</div>

	<!--end right-col div-->
		</div>





<div id="white-stripe" class="eq-height"></div>




	<!--end wrapper-shadow div-->
	</div>






<!--end background2 div-->
</div>


