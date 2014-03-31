<link rel="SHORTCUT ICON" href="/favicon.ico">
		
<link href="http://www.artegan.com/css/artegan.css" rel="stylesheet" type="text/css" media="all">

<link rel="alternate stylesheet" type="text/css" media="screen" title="small" href="http://www.artegan.com/css/small.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="medium" href="http://www.artegan.com/css/medium.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="large" href="http://www.artegan.com/css/large.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="xlarge" href="http://www.artegan.com/css/xlarge.css" />



<!--[if IE]><link rel="stylesheet" type="text/css" href="http://www.artegan.com/css/special-ie.css" />
<![endif]-->
		


	

<!--FONT SIZE SCRIPT -->

<!--This script should appear below your LINK stylesheet tags -->
<script src="http://www.artegan.com/js/styleswitch.js" type="text/javascript">

/***********************************************
* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>


<script type="text/javascript">

NameFontSize = function() {
var formref=document.getElementById("switchform")
indicateSelected(formref.switchcontrol)
}

//window.onload=NameFontSize;

</script>




<!--IE DROP DOWN MENU FIX -->
		
		<script type="text/javascript"><!--//--><![CDATA[//><!--
startList = function() {
	if (document.all&&document.getElementById) {
		navRoot = document.getElementById("nav");
		for (i=0; i<navRoot.childNodes.length; i++) {
			node = navRoot.childNodes[i];
			if (node.nodeName=="LI") {
				node.onmouseover=function() {
					this.className+=" over";
				}
				node.onmouseout=function() {
					this.className=this.className.replace(" over", "");
				}
			}
		}
	}


	if (document.all&&document.getElementById) {
		navRoot = document.getElementById("sub-nav");
		for (i=0; i<navRoot.childNodes.length; i++) {
			node = navRoot.childNodes[i];
			if (node.nodeName=="LI") {
				node.onmouseover=function() {
					this.className+=" over";
				}
				node.onmouseout=function() {
					this.className=this.className.replace(" over", "");
				}
			}
		}
	}
}
//window.onload=startList;

//--><!]]></script>


<!--WINDOW ONLOAD SCRIPT -->
<script type="text/javascript" src="http://www.artegan.com/js/WOM.js"></script>
	<script type="text/javascript">
		womAdd('startList()');
		womAdd('NameFontSize()');
		womAdd('showHot=true');
		womAdd('preloadImages()');
		womOn();
	</script>	

