/**
 * Класс автоматом прицепляет доп. стилевик, для текущего браузера.
 * @param cssPath String Корень для css-файлов
 */
function Crossbrowser(cssPath){
	this.cssPath = cssPath;
	this.addCss = document.createElement('link');
	this.addCss.type = 'text/css';
	this.addCss.rel = 'stylesheet';

	var cssAdded = false;

	try {
		if (Crossbrowser.isset(opera)) {
			this.addCss.href = this.cssPath + '/' + Crossbrowser.FILENAMES.OPERA + '.css';
			cssAdded = true;
		}
	} catch(e) {}

	try {
		if(/webkit/i.test(navigator.userAgent)){
			this.addCss.href = this.cssPath +  '/' +Crossbrowser.FILENAMES.WEBKIT + '.css';
			cssAdded = true;
		}
	} catch(e) {}

	try {
		if(/gecko/i.test(navigator.userAgent)){
			this.addCss.href = this.cssPath +  '/' + Crossbrowser.FILENAMES.FIREFOX + '.css';
			cssAdded = true;
		}
	} catch(e) {}

	if(cssAdded){
		document.getElementsByTagName('head')[0].appendChild(this.addCss);
	}
}

/**
 * Установлена ли переменная. А-ля PHP. Так короче.
 * @param _var
 */
Crossbrowser.isset = function(_var){
	return typeof(_var) != 'undefined';
};

Crossbrowser.FILENAMES = {
	OPERA: 'opera',
	WEBKIT: 'webkit',
	FIREFOX: 'ff'
};


