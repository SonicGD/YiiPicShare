<?php
/*
 * @var Controller $this
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title><?php echo CHtml::encode(strip_tags($this->pageTitle)); ?></title>
<meta name="title" content=""/>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

:focus {
    outline: 0;
}

ins {
    text-decoration: none;
}

del {
    text-decoration: line-through;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

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

html {
    height: 100%;
}

header, nav, section, article, aside, footer {
    display: block;
}

body {
    font: 14px Arial;
    width: 100%;
    height: 100%;
    background: #ffffff;
    color: #000000;
    position: relative;
}

a {
    color: #000000;
    outline: none;
    text-decoration: underline;
}

a:hover {
    color: #3a53a0;
    text-decoration: none;
}

a.blue {
    color: #3a53a0;
}

a.dashed {
    text-decoration: none;
    border-bottom: dashed 1px;
}

a.dashed:hover {
    border-bottom: none;
}

a.exit {
    color: #ef4136;
    background: url("../i/exit.png") center right no-repeat;
    padding-right: 14px;
}

h1 {
    margin: 0 0 25px 0;
    font-size: 24px;
    color: Black;
    font-style: italic;
}

h2 {
    margin: 0 0 15px 0;
    font-size: 24px;
    font-style: italic;
}

h2.toggle, h2.toggleV {
    border-bottom: dashed 1px;
    width: auto;
    cursor: pointer;
    display: inline-block;
}

h3 {
    margin: 0 0 15px 0;
    font-size: 18px;
    font-style: italic;
}

p {
    margin: 0 0 18px
}

img {
    border: none;
}

input {
    vertical-align: middle;
}

div, header, footer {
    position: relative;
}

hr {
    height: 1px;
    background: #d2d2d2;
    border: none;
}

.date {
    font-size: 0.9em;
    color: #d3d2d2;
}

#wrapper {
    width: 595px;
    margin: 0 auto;
    min-height: 100%;
    height: auto !important;
    height: 100%;
}

    /* Header
    -----------------------------------------------------------------------------*/
#header {
    height: 95px;
    font-size: 12px;
}

#header .ajax {
    position: absolute;
    background: white;
    height: 20px;
    width: 150px;
    left: 50%;
    top: -6px;
    margin-left: -75px;
    border: solid 1px gray;
    text-align: center;
    border-radius: 6px;
    padding-top: 6px;
    font-weight: bold;
    display: none;
}

#header .logo {
    position: absolute;
    left: 0;
    top: 15px;
    padding-top: 10px;
    font-size: 38px;
    font-style: italic;
    background: url("../i/logo.png") right top no-repeat;
    padding-right: 35px;
}

#header .logo a {
    color: #000000;
}

#header .user {
    position: absolute;
    left: 510px;
    top: 30px;
}

#header .user .avatar {
    width: 35px;
    height: 35px;
    float: left;
    margin-right: 15px;
}

#header .user .data {
    margin-left: 50px;
}

#header .mails {
    position: absolute;
    left: 710px;
    top: 30px;
}

#header .links {
    position: absolute;
    left: 778px;
    top: 30px;
    text-align: right;
}

    /* Middle
    -----------------------------------------------------------------------------*/
#content {
    padding: 0 0 180px;
}

#content .menu {
    margin-bottom: 12px;
    height: 36px;
}

#content .menu ul {

}

#content .menu ul li {
    display: inline;
    margin-right: 2px;
    font-size: 16px;
    padding-left: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 10px;
    position: relative;
}

#content .menu ul li.this {
    background: #0066dd;
    color: #ffffff;
    border-radius: 8px;
}

#content .menu ul li.this a {
    color: #ffffff;
}

#content .menu ul li.this .corner {
    position: absolute;
    background: url("../i/corner.png") top left no-repeat;
    width: 10px;
    height: 6px;
    bottom: -5px;
    left: 20px;
}

#content .menu ul li.dropdown {
    position: relative;
}

#content .menu ul li.dropdown a {
    background: url("../i/down.png") right center no-repeat;
    padding-right: 10px;
    text-decoration: none;
    border-bottom: dashed 1px;
}

#content .menu ul li.dropdown div {
    min-width: 50px;
    padding: 3px;
    position: absolute;
    left: 10px;
    top: 35px;
    background: #eaeaea;
    display: none;
}

#content .menu ul li.dropdown ul li {
    display: block;
    margin-right: 0;
}

#content .menu ul li.dropdown ul li a {
    background: none;
    text-decoration: underline;
    border: none;
}

#content .menu ul li.dropdown ul li a:hover {
    text-decoration: none;
}

#content .menu .selectors {
    position: absolute;
    top: 3px;
    right: 0;
}

#content .menu .selectors span {
    font-style: italic;
    cursor: pointer;
    margin-right: 5px;
}

#content .menu .selectors .good {
    background: #bdeeca url("../i/crest.png") 96% center no-repeat;
    padding-right: 16px;
}

#content .menu .selectors .bad {
    background: #f8a6a1 url("../i/mark.png") 96% center no-repeat;
    padding-right: 16px;
}

#content .menu .selectors a .good, #content .menu .selectors a .bad {
    background-image: none;
}

#content .menu .selectors span.off {
    background-color: #f1f1e4;
}

#content .topform {
    /*height: 117px;*/
    background: #f1f1e4 url("../i/formbg.png") top left;
    border-radius: 8px;
    margin-bottom: 40px;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-left: 20px;
    padding-right: 20px;
}

#content .topform .input {
    border-radius: 8px;
    padding: 10px 5px 10px 8px;
    background: #d7d7cb;
    position: relative;
    margin-right: 8px;
    margin-left: 5px;
}

#content .topform .input img {
    position: relative;
    top: 8px;
    border: solid 1px #c2c2c4;
    cursor: pointer;
}

#content .topform input[type=text], #content .topform input[type=checkbox] {
    border: solid 1px #c2c2c4;
}

#content .topform .input input {
    height: 20px;
}

#content .topform .input input.datepicker {
    text-align: right;
    margin-right: 5px;
    padding-right: 5px;
}

#content .topform .mode {
    margin-top: 15px;
    padding-bottom: 22px;
    border-bottom: solid 1px #cccccc;
}

#content .topform .mode a {
    margin-right: 12px;
}

#content .topform .mode a.this {
    font-weight: bold;
    color: #000000;
    border-bottom: 0;
}

#content .topform .footer {
}

#content .topform .footer .hiders {
    margin-top: 10px;
}

#content .topform .footer .hiders span {
    font-weight: bold;
}

#content .topform .footer .hiders label {
    margin-right: 10px;
}

#content table {
    width: 595px;
    margin-bottom: 40px;
}

#content table thead tr th, #content table tfoot tr th {
    border-top: 2px solid #ccc;
    text-align: left;
    border-bottom: solid 1px #f1eef5;
    padding: 5px;
}

#content table tfoot tr th {
    border-top: none;
    border-bottom: 1px solid #ccc
}

#content table tbody tr td {
    border-bottom: solid 1px #f1eef5;
    vertical-align: middle;
    padding: 5px;
}

#content table thead tr th.selected, #content table tbody tr td.selected, #content table tbody tr:hover td.selected {
    /*background: #f4f4f4;*/
    background: #ffff99;
}

#content table.alter tbody tr td {
    border: none;
}

#content table tbody tr:hover td {
    background: #f8f8f1;
}

#content table thead tr th.center, #content table tbody tr td.center, #content table tfoot tr th.center {
    text-align: center;

}

#content table thead tr th.right, #content table tbody tr td.right, #content table tfoot tr th.right {
    text-align: right;
}

#content table tbody tr td.right {

}

#content table tbody tr td.icons, #content table th.icons {
    border-left: solid 1px #d2cdd9;
}

#content table thead tr:first-child th.icons {
    border-left: none;
}

#content table tbody tr td.icons a {
    margin-right: 6px;
    text-decoration: none;
}

#content table tbody tr td.source sub {
    color: #808080;
    font-size: 10px;
}

#content table tbody tr td a.site {
    font-style: italic;
    text-decoration: none;
}

#content table tbody tr td a.site:hover {
    text-decoration: underline;
}

#content .menu .selectors span, #content table tbody tr td.right span {
    display: inline-block;
    border-radius: 6px;

}

#content .column {
    float: left;
}

div.clear {
    clear: both;
}

a.invoiceShow {
    width: 9px;
    height: 12px;
    background: url("../i/invoice.png") top left no-repeat;
    display: inline-block;
}

a.invoiceShow.visited {
    color: green;
    background: url("../i/invoice_visited.png") top left no-repeat;
}

div.collapsed {
    display: none;
}

.selectors a {
    text-decoration: none;
}

.comment {
    border: solid 1px #e6e6e6;
    border-radius: 6px;
    padding: 10px 5px;
    width: 450px;
    margin-bottom: 15px;
}

textarea.comment {
    width: auto;
    margin-bottom: 0;
    padding: 3px 1px;
}

ol.list {
    list-style-type: decimal;
}

ol.list li {
    margin-bottom: 5px;
}

    /* Footer
    -----------------------------------------------------------------------------*/
#footer {
    width: 960px;
    margin: -130px auto 0;
    height: 95px;
    border-top: 2px solid #e6e6e6;
    padding-top: 35px;
    font-size: 13px;
    line-height: 20px;
}

#footer .copyrights {
    position: absolute;
}

#footer .links {
    position: absolute;
}

#footer .links.one {
    left: 245px;
}

#footer .links.two {
    left: 510px;
}

#footer .sitko {
    position: absolute;
    left: 710px;
}

div.form {
    padding: 10px;
}

div.form input,
div.form textarea,
div.form select {
    margin: 0.2em 0 0.5em 0;
}

div.form fieldset {
    border: 1px solid #DDD;
    padding: 10px;
    margin: 0 0 10px 0;
    -moz-border-radius: 7px;
}

div.form label {
    font-weight: bold;
    font-size: 0.9em;
    display: block;
}

div.form .row {
    margin: 5px 0;
}

div.form .row.bottom {
    bottom: 0;
    position: absolute;
}

div.form .row.checkboxes {

}

div.form .row.checkbox label, div.form .row.checkboxes label {
    display: inline;
}

div.form .hint {
    margin: 0;
    padding: 0;
    color: #999;
}

div.form .note {
    font-style: italic;
}

div.form span.required {
    color: red;
}

div.form div.error label,
div.form label.error,
div.form span.error {
    color: #C00;
}

div.form div.error input,
div.form div.error textarea,
div.form div.error select,
div.form input.error,
div.form textarea.error,
div.form select.error {
    background: #FEE;
    border-color: #C00;
}

div.form div.success input,
div.form div.success textarea,
div.form div.success select,
div.form input.success,
div.form textarea.success,
textarea.success,
div.form select.success {
    background: #E6EFC2;
    border-color: #C6D880;
}

div.form .errorSummary {
    border: 2px solid #C00;
    padding: 7px 7px 12px 7px;
    margin: 0 0 20px 0;
    background: #FEE;
    font-size: 0.9em;
}

div.form .errorMessage {
    color: red;
    font-size: 0.9em;
}

div.form .errorSummary p {
    margin: 0;
    padding: 5px;
}

div.form .errorSummary ul {
    margin: 0;
    padding: 0 0 0 20px;
}

div.wide.form label {
    float: left;
    margin-right: 10px;
    position: relative;
    text-align: right;
    width: 100px;
}

div.wide.form .row {
    clear: left;
}

div.wide.form .buttons, div.wide.form .hint, div.wide.form .errorMessage {
    clear: left;
    padding-left: 110px;
}

div.ad {
    font-size: 1.1em;
}

div.ad .adTitle {
    color: #2200C1;
    cursor: pointer;
    text-decoration: underline;
    line-height: 1.2;
}

div.ad .adUrl {
    color: #0E774A;
}

#overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-color: #000000;
    opacity: 0.8;
    /*display: none;*/
}

#form {
    /*    position: absolute;
    left: 50%;
    width: 960px;
     border-radius: 6px;
     background: #ffffff;
    top: 50px;
    */
    padding: 20px;
    min-height: 200px;

    /*display: none;*/
}

#form.inline {
    position: relative;
    left: 0;
    margin-left: 0;
    width: 100%;
    top: 0;
}

#form h1 {
    color: #1094c6;
    font-size: 28px;

    font-weight: normal;
    margin-top: 0;
    padding-top: 0;
    margin-bottom: 20px;
}

#form .wrapper .close {
    position: absolute;
    width: 15px;
    height: 14px;
    top: 0;
    right: 0;
    z-index: 999;
}

#form fieldset {
    border: none;
    padding: 0;
    margin: 0;
}

#form label {
    display: block;
    color: #414042;
    font-family: Arial;
    font-size: 13px;
    margin-bottom: 3px;
}

#form .row.checkboxes {
    padding-left: 10px;
}

#form .row.checkbox label, #form .row.checkboxes label {
    display: inline;
}

#form span.req {
    color: #ff0000;
}

#form div.field .message {
    position: absolute;
    right: 12px;
    top: 0;
    font-size: 13px;
    color: #ff0000;
    font-family: Arial;
    display: none;
}

#form input[type=text], #form select, #form input[type=file], #form textarea {
    border: solid 1px #d1d1d1;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 12px;
    padding: 4px 3px;
}

#form div.error input, #form div.error textarea {
    background: #ffe5e5;
}

#form div.error .message {
    display: block;
}

#form input[type=text], #form textarea {
    width: 384px;
}

#form textarea {
    height: 70px;
    margin-bottom: 9px;
}

#form select {
    min-width: 250px;
}

#form input[type=file] {
    width: 310px;
    font-size: 12px;
}

#form a.delete {
    color: #1799d5;
    font-size: 14px;
    font-family: Arial;
    padding-left: 5px;
    position: absolute;
    top: 24px;
    left: 200px;
}

#form span.desc {
    position: absolute;
    top: 10px;
    left: 150px;
    font-size: 11px;
    font-family: Arial;
    color: #414042;
}

#form div.button {
    margin-top: 15px;
}

#form input[type=submit] {
    background: #1094c6;
    width: 136px;
    height: 49px;
    color: #ffffff;
    font-family: arial;
    font-size: 20px;
    border-radius: 8px;
    border: solid 1px #1094c6;
    cursor: pointer;
    text-align: center;
}

#form input[type=submit]:hover {
    background-image: url("/images/widgets/shadow.png");
}

#form td:last-child {
    padding-left: 10px;
}

#form #campaigns fieldset {
    border: solid 1px gray;
    padding: 3px;
    margin: 3px;
    border-radius: 6px;
}

#form fieldset {
    border: solid 1px #D1D1D1;
    border-radius: 6px;
    padding: 5px;
    margin-top: 5px;
    background: white;
}

iframe {
    visibility: hidden;
    height: 0;
    position: absolute;
    width: 0;
}

div.days table {
    width: 100%;
    border-spacing: 3px;
    border-collapse: separate;
}

div.days table tr td {
    border: solid 1px #D1D1D1;
    border-radius: 6px;
    height: 100px;
    position: relative;
    width: 172px;
}

div.days table tr td ul.tasks {
    min-height: 65px;
    padding: 3px;
    border-radius: 6px;
    margin-bottom: 20px;
}

div.days table tr td ul.tasks.active {
    background: yellow;
}

div.days table tr td ul.tasks.ready {
    background: #ffffe0;
}

div.days table tr td div.title {
    text-align: center
}

#form div.days table tr td select, #form div.days table tr td input.mini {
    font-size: 10px;
    margin: 0;
    min-width: 0;
    width: auto;
}

div.days table tr td ul.tasks li fieldset {
    font-size: 10px;
}

div.days table tr td ul.tasks li fieldset legend {
    cursor: move;
}

</style>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="logo">
            <a href="<?=$this->startUrl?>"><?=t("<strong>Cliento</strong>generator", "main")?></a>
        </div>
    </header>
    <!-- #header-->

    <div id="content">
        <?php echo $content; ?>
    </div>
</div>
<br/>
<footer id="footer">
    <div class="copyrights">Адрес: РОССИЯ, Челябинск, ул. Воровского 15б, оф.: 1<br/>
        Тел.: +7 (351) 261-88-59, 261-88-93, 235-0-234,<br/>
        love@sitko.ru
        <br/>
    </div>
</footer>
<!-- #footer -->

</body>