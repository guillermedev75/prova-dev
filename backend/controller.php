<?php

    error_reporting(0);

    require 'conexao.php';
    $db - new DataBase();

    if(!$db->connection)
        $carros = false;
    else if($_GET['pesquisa'] != '')
        $carros = $db->search($_GET['pesquisa']);
    else
        $carros = $db->get();

?>