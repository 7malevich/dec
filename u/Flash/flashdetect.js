var useRedirect = true; 
// #############################################
// System globals
var flash2Installed = false;
var flash3Installed = false;
var flash4Installed = false;
var flash5Installed = false;
var flash6Installed = false;
var flash7Installed = false;
var maxVersion = 7;
var actualVersion = 0;
var hasRightVersion = false;
var jsVersion = 1.0;

var isIE = ((navigator.appVersion.indexOf("MSIE") != -1) && (navigator.appVersion.indexOf("MSIE") == navigator.appVersion.lastIndexOf("MSIE"))) ? true : false; // true if we're on ie
var isWin = (navigator.appVersion.indexOf("Windows") != -1) ? true : false; // true if we're on windows

function detectSpecialFlash(requiredVersion,flashcode,noflash) {

if (isIE && (navigator.appVersion.indexOf("MSIE 5.") != -1 || navigator.appVersion.indexOf("MSIE 6.") != -1) && !window.opera){
	//alert(navigator.appVersion);
	detectFlash(requiredVersion,flashcode,noflash);
} else document.write(noflash);	

}

function detectFlash(requiredVersion,flashcode,noflash) { 
	
if(isIE && isWin){
	document.write('<SCR' + 'IPT LANGUAGE=VBScript\> \n');
	document.write('on error resume next \n');
	document.write('jsVersion = 1.0 \n');
	document.write('flash2Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.2"))) \n');
	document.write('flash3Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.3"))) \n');
	document.write('flash4Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.4"))) \n');
	document.write('flash5Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.5"))) \n'); 
	document.write('flash6Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.6"))) \n'); 
	document.write('flash7Installed = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.7"))) \n'); 
	document.write('</SCR' + 'IPT\> \n'); 
}

if (navigator.plugins) {
	// ...then check for flash 2 or flash 3+.
	if (navigator.plugins["Shockwave Flash 2.0"]
	|| navigator.plugins["Shockwave Flash"]) {

		var isVersion2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
		var flashDescription = navigator.plugins["Shockwave Flash" + isVersion2].description;
		var flashVersion = parseInt(flashDescription.charAt(flashDescription.indexOf(".") - 1));
		flash2Installed = flashVersion == 2; 
		flash3Installed = flashVersion == 3;
		flash4Installed = flashVersion == 4;
		flash5Installed = flashVersion == 5;
		flash6Installed = flashVersion >= 6;
		flash7Installed = flashVersion >= 7;
	}
}

for (var i = 2; i <= maxVersion; i++) { 
	if (eval("flash" + i + "Installed") == true) actualVersion = i;
}

	//alert("version detected: " + actualVersion);
	if (actualVersion < requiredVersion) {
		document.write(noflash);
		return 0;
	}
	else {
		document.write(flashcode);
		return 1;
	}

}