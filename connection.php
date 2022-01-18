<?php

$connection;
$tableCarros = "carros";
$tableMarcas = "marcas";

$user   = 'root';
$pw     = '';
$dbname = 'db_carros';
$host   = '127.0.0.1';

$connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pw);

?>