/**
 * Created with JetBrains PhpStorm.
 * User: Георгий
 * Date: 22.03.12
 * Time: 16:36
 * To change this template use File | Settings | File Templates.
 */
$(function () {
    $('#fileupload').fileupload('option', {
        //url: '//jquery-file-upload.appspot.com/',
        maxFileSize:5000000,
        acceptFileTypes:/(\.|\/)(gif|jpe?g|png)$/i,
        resizeMaxWidth:1920,
        resizeMaxHeight:1200
    });
// Upload server status check for browsers with CORS support:
    if ($.support.cors) {
        $.ajax({
            url:'//bwhost.ru/',
            type:'HEAD'
        }).fail(function () {
                $('<span class="alert alert-error"/>')
                    .text('Upload server currently unavailable - ' +
                    new Date())
                    .appendTo('#fileupload');
            });
    }
});