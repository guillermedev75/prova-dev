<?php 
    $uriPage = $_SERVER['REQUEST_URI'];

    if($uriPage == '/prova-dev/public/home' || $uriPage == '/prova-dev/public/'){
        if(file_exists("../src/views/homePage.php")){
            require_once "../src/views/homePage.php";
            $_SERVER['REQUEST_URI'] = "/prova-dev/public/";
        } else {
            require_once "../src/views/404Page.php";
        }
    } else if($uriPage == '/prova-dev/public/cadastro'){
        if(file_exists("../src/views/cadastroPage.php")){
            require_once "../src/views/cadastroPage.php";
        } else {
            require_once "../src/views/404Page.php";
        }
    } else if($uriPage == '/prova-dev/public/login'){
        if(file_exists("../src/views/loginPage.php")){
            require_once "../src/views/loginPage.php";
        } else {
            require_once "../src/views/404Page.php";
        }
    } else {
            require_once "../src/views/404Page.php";
            http_response_code(404);
        }
    ?>