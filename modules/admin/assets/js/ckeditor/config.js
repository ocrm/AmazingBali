/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.filebrowserBrowseUrl = '/elfinder/manager/';
    //config.filebrowserUploadUrl = '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=';
    config.filebrowserImageBrowseUrl = '/elfinder/manager/';
    config.extraPlugins = 'savebtn,hr,listx,listwarn,sourcedialog';
    config.allowedContent = true;
    //config.enterMode = CKEDITOR.ENTER_BR;
    CKEDITOR.config.autoParagraph = false;
    CKEDITOR.dtd.$removeEmpty['span'] = false;
    CKEDITOR.dtd.$removeEmpty['div'] = false;
    CKEDITOR.dtd.$removeEmpty['i'] = false;
};
