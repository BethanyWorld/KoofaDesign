/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'fa';
    config.filebrowserBrowseUrl = 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&akey=gWgMQVkXcjpKgkcr&fldr=';
    // config.uiColor = '#AADC6E';
};

$(document).on('click',".fileManagerHandler" , function(e){
    e.preventDefault();
    $inputId = $(this).attr('data-target-id');
    $url = "";
    /*$url += "http://koofadesign.ir/";*/
    $url += "http://localhost:8080/KoofaDesign/";
    $url += 'media/responsivefilemanager/filemanager/dialog.php?type=2&field_id=";' +$inputId +'&akey=gWgMQVkXcjpKgkcr&fldr=';
    $(".fileManagerFrame").attr('src' , $url);
    $('.fileManagerFrame').on('load', function(){
    });
});

