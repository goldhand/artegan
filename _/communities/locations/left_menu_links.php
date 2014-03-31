<?php
//this function is used to write out a navigation a link
//the current page will be tagged with the "communitycurrentpage" class so you can change its layout via CSS
function writeComNavLink($text, $path) {
	echo "<a href=\"{$path}\" title=\"{$text}\"";
	if ($_SERVER['SCRIPT_NAME'] == $path) { echo " class=\"communitycurrentpage\""; }
	echo ">{$text}</a><br>";	
}
?>

