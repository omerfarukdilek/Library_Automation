/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
CKEDITOR.editorConfig = function( config )
{
    config.language = 'tr';
    config.IncludeLatinEntities = false;
    config.enterMode = 2; //entere basıldığında <br/> ekler
    config.newpage_html = ''; //yeni açıldığında <p></p> kodları koymaz.
};