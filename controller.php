<?php
require "connection.php";
 
function getAllCards() {
   global $connection;

   $sql = $connection->query("SELECT * from carros");
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

function getSearchCard($request) {
   global $connection;

   $sql = $connection->query("SELECT C.nome,marca,preco,foto from carros C JOIN marcas M ON M.id = C.marca WHERE C.nome LIKE '%$request%' OR M.nome LIKE '%$request%'");
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

?>