<!--Google Analytics-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2480152-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--End Google Analytics-->






<div id="background2">






		<div id="wrapper-shadow">
		<div id="black-stripe1"></div>
		<div id="black-stripe2"></div>





		




<!--LEFT COLUMN-->
		<div id="left-col" class="eq-height">
			
			<!--Artegan logo-->	
			<div id="nav_image">
			<a href="http://www.artegan.com/index.php"><img src="http://www.artegan.com/images/common/artegan-logo.png"></a>
			</div>

			<div id="olive-rule">
				<div id="text-size">			
				Text Size: &nbsp; 
<a class="text-size" style="font-size:8pt;" href="javascript:chooseStyle('none', 60)" checked="checked">A</a> &nbsp; 
<a class="text-size" style="font-size:10pt;" href="javascript:chooseStyle('medium', 60)">A</a> &nbsp; 
<a class="text-size" style="font-size:12pt;"href="javascript:chooseStyle('large', 60)">A</a>
				</select>
				</form>
				</div>
			</div>


<div id="left-nav">

<?php
//this function is used to write out a navigation li link
//the current page will be tagged with the "currentpage" class so you can change its layout via CSS
function writeNavLink($text, $path) {
	if ($_SERVER['SCRIPT_NAME'] == $path) { $cls = "class=\"currentpage\""; } else { $cls = ""; }
	echo "<li {$cls}><a href=\"{$path}\" title=\"{$text}\">{$text}</a></li>";
}
;?>


<?php
//this function is used to write out a navigation li link that needs to have an ending li outside of the function
//the current page will be tagged with the "currentpage" class so you can change its layout via CSS
function writeNavLinkA($text, $path) {
	if ($_SERVER['SCRIPT_NAME'] == $path) { $cls = "class=\"currentpage\""; } else { $cls = ""; }
	echo "<li {$cls}><a href=\"{$path}\" title=\"{$text}\">{$text}</a>";
}
;?>

