<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo Yii::app()->name; ?></title>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <?php
    $cs = Yii::app()->getClientScript();
    $cs->registerCssFile(Yii::app()->theme->baseUrl . "/css/bootstrap.min.css");
    ?>
    <style type="text/css">

        .clearfix:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .clearfix {
            display: inline-block;
        }

        html[xmlns] .clearfix {
            display: block;
        }

        * html .clearfix {
            height: 1%;
        }

        body {
            font-family: arial;
            font-size: 16px;
            color: black;

            color: #333333;
        }

        div {
            position: relative;
        }

        h2 {
            font-family: georgia;
            font-size: 24px;
            font-style: italic;
            font-weight: normal;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .wrapper {
            width: 1000px;
            margin: 0 auto;
        }

        .header {
            padding-top: 20px;
            margin-bottom: 10px;
        }

        .content {
            margin-bottom: 40px;
        }

        .content .main {
            float: left;
            width: 500px;
        }

        .content .right {
            float: left;
            width: 450px;
            margin-left: 50px;
            padding-top: 96px;
        }

        #loginform {
            background: url("<?=Yii::app()->theme->baseUrl?>/i/login/login.png") top left no-repeat;
            position: relative;
            width: 380px;
            height: 262px;

            padding-top: 100px;
            padding-left: 28px;
            padding-right: 14px;
        }

        #loginform input[type=text], #loginform input[type=password] {
            margin-bottom: 20px;
            width: 280px;
        }

            /*#loginform input[type=submit] {
           background: url("<?=Yii::app()->theme->baseUrl?>/i/enter.png");
            width: 131px;
            height: 49px;
            border: none;
            cursor: pointer;
            position: absolute;
            right: 28px;
            top: 0;
        }*/

        #loginform label {
            width: 40px;
        }

        #loginform .controls {
            margin-left: 60px;
        }

        div.buttons {
            padding-top: 15px;
            position: relative;
        }

        .footer {

            margin-bottom: 40px;
            font-family: georgia;
            font-size: 24px;
            font-style: italic;
        }

        .footer  a {
            color: #0089c2;
            text-decoration: none;

        }

        .footer h2 {
            color: #333;
        }

        .phone {
            color: #0089c2;
            font-size: 48px;
            padding-left: 305px;
            margin-bottom: 55px;
        }

    </style>

</head>
<body>
<?php echo $content; ?>
</body>
</html>