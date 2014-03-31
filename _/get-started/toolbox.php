


<?php
//this function is used to write out a navigation a link
//the current page will be tagged with the "communitycurrentpage" class so you can change its layout via CSS
function writeComNavLink($text, $path) {
	echo "<a href=\"{$path}\" title=\"{$text}\"";
	if ($_SERVER['SCRIPT_NAME'] == $path) { echo " class=\"communitycurrentpage\""; }
	echo ">{$text}</a><br>";	
}
?>	

<div id="toolbox">

		<h2>More Help</h2>
		<?php writeComNavLink("Senior Move Manager", "http://www.artegan.com/get-started/move/move-manager.php");?>
		<?php writeComNavLink("Living Options Decision Quiz", "http://www.artegan.com/communities/living-options/decision-quiz.php");?>
		<?php writeComNavLink("Resources", "http://www.artegan.com/resources.php");?>		
		




<!--Example drop down menu 1-->

<form name="form1">
<label>Financial Worksheet:</label>
<div style="margin-left:20px;">
<select name="select1" size="1" style="background-color:#ffffff;" onChange="displaydesc(document.form1.select1, thetext1, 'textcontainer1')">
<option selected>Select a Community</option>
 <option value="http://www.artegan.com/get-started/tools/finance-wkst-omak.pdf">Omak, WA</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-shelton.pdf" target="newwin">Shelton, WA</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-normandy-park.pdf" target="newwin">Normandy Park, WA</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-maple-valley.pdf" target="newwin">Maple Valley, WA</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-colville.pdf" target="newwin">Colville, WA</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-washougal.pdf" target="newwin">Washougal, WA</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-portland.pdf" target="newwin">Portland (NW), OR</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-portlandSE.pdf" target="newwin">Portland (SE), OR</option>
<option value="http://www.artegan.com/get-started/tools/finance-wkst-burlington.pdf" target="newwin">Burlington, WA</option>

</select>
 <input type="button" value="Download pdf" 
onClick="jumptolink(document.form1.select1)"><br>
</div>

</form>





<!--IMPORTANT: Below script should always follow all of your HTML codes above, and never proceed them-->
<!--To be safe, just add below script at the end of your page-->

<script type="text/javascript">

/***********************************************
* Drop down menu w/ description- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//1) CUSTOMIZE TEXT DESCRIPTIONS FOR LINKS ABOVE
var thetext1=new Array()
thetext1[0]=""
thetext1[1]=""
thetext1[2]=""
thetext1[3]=""
thetext1[4]=""


// Now, see 2) below for final customization step

function displaydesc(which, descriptionarray, container){
if (document.getElementById)
document.getElementById(container).innerHTML=descriptionarray[which.selectedIndex]
}

function jumptolink(what){
var selectedopt=what.options[what.selectedIndex]
if (document.getElementById && selectedopt.getAttribute("target")=="newwin")
window.open(selectedopt.value)
else
window.location=selectedopt.value
}

//2) Call function displaydesc() for each drop down menu you have on the page
//   This function displays the initial description for the selected menu item
//   displaydesc(name of select menu, name of corresponding text array, ID of SPAN container tag):
//   Important: Remove the calls not in use (ie: 2nd line below if there's only 1 menu on your page)

displaydesc(document.form1.select1, thetext1, 'textcontainer1')


</script>












	
</div>
<!--end of toolbox-div-->	
				