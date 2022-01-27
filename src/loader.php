<?php 
    $uriPage = $_SERVER['REQUEST_URI'];

    if($uriPage == '/prova-dev/public/home' || $uriPage == '/prova-dev/public/')
        require_once "../src/views/homePage.php";
    
    
    if($uriPage == '/prova-dev/public/cadastro')
        require_once "../src/views/cadastroPage.php";

    else
        require_once "../src/views/404Page.php"
?>