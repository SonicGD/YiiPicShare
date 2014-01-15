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
        url: '/upload',
        maxFileSize: 5000000,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        resizeMaxWidth: 1920,
        resizeMaxHeight: 1200
    });
});