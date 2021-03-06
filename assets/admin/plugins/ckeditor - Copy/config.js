CKEDITOR.editorConfig = function (config) {
    // https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html
    config.language = 'fa';
    config.format_tags = 'p;h1;h2;h3;pre';
    config.filebrowserBrowseUrl = 'http://localhost:8080/Carnoma/media/responsivefilemanager/filemanager/dialog.php?type=1&editor=ckeditor&akey=gWgMQVkXcjpKgkcr&fldr=';

    config.toolbarGroups = [
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'forms', groups: [ 'forms' ] },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
        { name: 'links', groups: [ 'links' ] },
        { name: 'insert', groups: [ 'insert' ] },
        '/',
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'tools', groups: [ 'tools' ] },
        { name: 'others', groups: [ 'others' ] },
        { name: 'about', groups: [ 'about' ] }
    ];


};


$(document).on('click', ".fileManagerHandler", function (e) {
    e.preventDefault();
    $inputId = $(this).attr('data-target-id');
    $url = "";
    /*$url += "http://koofadesign.ir/";*/
    $url += "http://localhost:8080/Carnoma/";
    $url += 'media/responsivefilemanager/filemanager/dialog.php?type=2&field_id=";' + $inputId + '&akey=gWgMQVkXcjpKgkcr&fldr=';
    $(".fileManagerFrame").attr('src', $url);
    $('.fileManagerFrame').on('load', function () {
        setTimeout(function () {
            $('#myModal').modal('show');
        }, 100);
    });
});