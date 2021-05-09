<?php  
include 'app/routes/pages.php';
Pages::registerPage('index', 'pages/index', HEAD, FOOTER);
Pages::registerPage('page-404', 'pages/page404', HEAD, FOOTER);
