try {
  document.execCommand("BackgroundImageCache", false, true);
} catch(err) {}


sfHover = function() {
	var sfEls = document.getElementById("sckrfsh").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" over";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" over\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
