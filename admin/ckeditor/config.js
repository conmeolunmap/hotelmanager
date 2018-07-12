/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	var domain = "localhost/hotelmanager/admin/";
	config.filebrowserBrowseUrl = domain + 'ckfinder/ckfinder.html';
   config.filebrowserImageBrowseUrl = domain + 'ckfinder/ckfinder.html?type=Images';
   config.filebrowserFlashBrowseUrl = domain + 'ckfinder/ckfinder.html?type=Flash';
   config.filebrowserUploadUrl = domain + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
   config.filebrowserImageUploadUrl = domain + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
   config.filebrowserFlashUploadUrl = domain + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.extraPlugins = 'bootstrapVisibility';
};
