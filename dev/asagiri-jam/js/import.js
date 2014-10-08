// JavaScript Document
function importJS() {
    if (! new Array().push) return false;
        var scripts = new Array(
        '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
        '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js',
        '//ajax.googleapis.com/ajax/libs/prototype/1.7.2.0/prototype.js',
        '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'
        ,
        './js/user.js'

        );
        for (var i=0; i<scripts.length; i++) {
        document.write('<script type="text/javascript" src="' +scripts[i] +'"><\/script>');
        }
    }
importJS();


/* ==================================================================
CDN information
 Google Developers - Google Hosted Libraries
 https://developers.google.com/speed/libraries/devguide

jQuery
snippet: <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

jQuery Mobile
snippet: <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"></script>

jQuery UI
snippet: <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

Prototype
snippet: <script src="//ajax.googleapis.com/ajax/libs/prototype/1.7.2.0/prototype.js"></script>
site: http://prototypejs.org/

Web Font Loader
snippet: <script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js"></script>
site: https://github.com/typekit/webfontloader

Bootstrap
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
http://www.bootstrapcdn.com/
================================================================== */
