<?php
/*
 * @var Controller $this
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title><?php echo $this->pageTitle; ?></title>
    <meta name="title" content=""/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <?php
    //echo Yii::app()->bootstrap->registerCoreCss();
    $cs = Yii::app()->getClientScript();
    $cs->registerCssFile(Yii::app()->theme->baseUrl . "/css/bootstrap.min.css");
    $cs->registerCssFile(Yii::app()->theme->baseUrl . "/css/jquery.fileupload-ui.css");
    $cs->registerCssFile(Yii::app()->theme->baseUrl . "/css/style.css");

    //$cs->registerCoreScript('jquery');
    //$cs->registerScriptFile($cs->getCoreScriptUrl() . '/jui/js/jquery-ui.min.js');
    //$cs->registerScriptFile($cs->getCoreScriptUrl() . '/jui/js/jquery-ui-i18n.min.js');
    //$cs->registerCssFile($cs->getCoreScriptUrl() . '/jui/css' . '/base/' . 'jquery-ui.css');
    //$cs->registerScriptFile(Yii::app()->theme->baseUrl . "/js/bootstrap.min.js");
    //$cs->registerScriptFile(Yii::app()->theme->baseUrl . "/js/script.js");


    ?>
    <script type="text/javascript">

        /**var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-4003731-89']);
         _gaq.push(['_trackPageview']);

         (function () {
         var ga = document.createElement('script');
         ga.type = 'text/javascript';
         ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0];
         s.parentNode.insertBefore(ga, s);
         })();**/

    </script>
    <style type="text/css">
            /* Override some defaults */
        html, body {
            background-color: #eee;
        }

        body {
            padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
        }

        .container > footer p {
            text-align: center; /* center align it with the container */
        }

        .container {
            width: 940px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
        }

            /* The white background content wrapper */
        .container > .content:first-child {
            background-color: #fff;
            padding: 20px;
            margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
            -webkit-border-radius: 0 0 6px 6px;
            -moz-border-radius: 0 0 6px 6px;
            border-radius: 0 0 6px 6px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
        }

            /* Page header tweaks */
        .page-header {
            background-color: #f5f5f5;
            padding: 20px 20px 10px;
            margin: -20px -20px 0;
            margin-bottom: 10px;
        }

            /* Styles you shouldn't keep as they are for displaying this base example only */
        .content .span {
            min-height: 500px;
        }

        .content .topform .footer select {
            width: auto;
        }

    </style>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/"><?=Yii::app()->name?></a>

            <div class="nav-collapse">
                <?php
                $items = array(
                    //array('label' => 'Главная', 'url' => array('/site/index')),
                    array('label' => 'О сервисе', 'url' => array('/about')),
                );

                $this->widget('zii.widgets.CMenu', array(
                    'id' => 'main-menu',
                    'items' => $items,
                    'htmlOptions' => array('class' => 'nav')

                ));
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="content">
        <div class="page-header">
            <h1><?=$this->pageTitle?>
            </h1>
        </div>

        <div class="row">
            <div class="span">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; www.BioWare.ru 2012-<?= date("Y") ?></p>
    </footer>

</div>
<!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
<script src="http://blueimp.github.com/cdn/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/jquery.fileupload.js"></script>
<!-- The File Upload image processing plugin -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/jquery.fileupload-ip.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/jquery.fileupload-ui.js"></script>
<!-- The localization script -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/locale.js"></script>
<!-- The main application script -->
<script src="<?=Yii::app()->theme->baseUrl?>/js/script.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]>
<script src="<?=Yii::app()->theme->baseUrl?>/js/cors/jquery.xdr-transport.js"></script><![endif]-->
</body>
</html>
