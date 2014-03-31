var imgPathPrefix = "/images/common";

function Rollover(docImage,rootPath,fileName,fileMod,fileExt) {
	this.docImg = docImage;
	this.onImg = new Image();
	this.onImg.src = rootPath + "/" + fileName + fileMod + "." + fileExt;
	this.offImg = new Image();
	this.offImg.src = rootPath + "/" + fileName + "." + fileExt;
}
Rollover.prototype._getImage = function() {
	return document.getElementById ? document.getElementById(this.docImg) : eval("document.images['" + this.docImg + "']");
}
Rollover.prototype.on = function() {
	rollImg = this._getImage();
	rollImg.src = this.onImg.src;
}
Rollover.prototype.off = function() {
	rollImg = this._getImage();
	rollImg.src = this.offImg.src;
}

var oLink1 = new Rollover('navLink1',imgPathPrefix,'nav_redArrow','_over','gif');
var oLink2 = new Rollover('navLink2',imgPathPrefix,'nav_redArrow','_over','gif');

function jumpTo(selectObject) {
	if (selectObject.options[selectObject.selectedIndex].value != null && (selectObject.options[selectObject.selectedIndex].value != "")) {
		location.href = selectObject.options[selectObject.selectedIndex].value;
	} else {
		selectObject.selectedIndex = 0;
	}
}

function setPrefs_fontLarge() {
	WM_setCookie('prefs_largeFont','yes',8760);
	//document.styleSheets[1].disabled = false;
	location.reload();
}
function setPrefs_fontDefault() {
	WM_setCookie('prefs_largeFont','no',8760);
	//document.styleSheets[1].disabled = true;
	//location.href = location.href;
	location.reload();
}

function writePrefsLinks() {
	
	var strOutput = '';
	strOutput += (blnLarge) ? '<a href="javascript:setPrefs_fontDefault();">' : '';
	strOutput += 'A';
	strOutput += (blnLarge) ? '</a>' : '';
	strOutput += ' ';
	strOutput += (!blnLarge) ? '<a href="javascript:setPrefs_fontLarge();" class="fontLarge">' : '<span class="fontLarge">';
	strOutput += 'A';
	strOutput += (!blnLarge) ? '</a>' : '</span>';
	
	document.writeln(strOutput);
}

var strCookiePrefs = new String(WM_readCookie('prefs_largeFont'));
var blnLarge = (strCookiePrefs.indexOf('yes') > -1) ? true : false;
if (blnLarge) {
	document.writeln('<link rel="stylesheet" href="/css/large.css" charset="iso-8859-1" />');
}