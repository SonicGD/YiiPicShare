/**
 * Created with JetBrains PhpStorm.
 * User: Георгий
 * Date: 22.03.12
 * Time: 16:36
 * To change this template use File | Settings | File Templates.
 */
$(function () {

    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload();

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    $('#fileupload').fileupload('option', {
        //url: '//jquery-file-upload.appspot.com/',
        maxFileSize:5000000,
        acceptFileTypes:/(\.|\/)(gif|jpe?g|png)$/i,
        resizeMaxWidth:1920,
        resizeMaxHeight:1200
    });
// Upload server status check for browsers with CORS support:
    /*if ($.support.cors) {
     $.ajax({
     url:'//bwhost.ru/',
     type:'HEAD'
     }).fail(function () {
     $('<span class="alert alert-error"/>')
     .text('Upload server currently unavailable - ' +
     new Date())
     .appendTo('#fileupload');
     });
     }*/
});