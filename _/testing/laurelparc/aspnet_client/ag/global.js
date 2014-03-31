function toggle(targetId ){
if (document.getElementById){
	target = document.getElementById( targetId );
  	if (target.style.display == "none")	target.style.display = ""
    else target.style.display = "none"
  	}
}

function printPage() {
	if (window.print)
		window.print()
	else
		alert("Sorry, your browser doesn't support this feature. To print this webpage using a PC press 'Ctrl + P' on your keyboard. To print this page using a Mac press 'Command + P' on your keyboard.");
	}

function addfav() {
            var title = document.title;
            var url = location.href;
            if (window.sidebar) { 
	            window.sidebar.addPanel(title, url,""); 
            } else if( document.all ) {
	            window.external.AddFavorite( url, title);
            } else if( window.opera && window.print ) {
	            return true;
            }
        }
        
function setActiveStyleSheet(title) {
  var i, a, main;
  switch(title) {
    case "A":
        document.getElementById("smalltext").style.display="none";
        document.getElementById("largetext").style.display="none";
        document.getElementById("medtext").innerHTML = "Increase Text Size";
        document.getElementById("medtext").style.display="";
        break;
    case "A+":
        document.getElementById("medtext").style.display="none";
        document.getElementById("smalltext").style.display="";
        document.getElementById("largetext").style.display="";
        break;
    case "A++":
        document.getElementById("smalltext").style.display="none";
        document.getElementById("largetext").style.display="none";
        document.getElementById("medtext").innerHTML = "Decrease Text Size";
        document.getElementById("medtext").style.display="";
        break;
     }
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}