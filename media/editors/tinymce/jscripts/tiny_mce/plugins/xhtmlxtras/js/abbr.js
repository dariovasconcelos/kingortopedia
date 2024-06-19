/**
 * abbr.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: https://tinymce.moxiecode.com/license
 * Contributing: https://tinymce.moxiecode.com/contributing
 */

function init() {
	SXE.initElementDialog('abbr');
	if (SXE.currentAction == "update") {
		SXE.showRemoveButton();
	}
}

function insertAbbr() {
	SXE.insertElement('abbr');
	tinyMCEPopup.close();
}

function removeAbbr() {
	SXE.removeElement('abbr');
	tinyMCEPopup.close();
}

tinyMCEPopup.onInit.add(init);
