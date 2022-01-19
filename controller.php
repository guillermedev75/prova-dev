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
   $request = "%".$request."%";

   $sql = $connection->prepare("SELECT C.nome,marca,preco,foto from carros C JOIN marcas M ON M.id = C.marca WHERE C.nome LIKE ? OR M.nome LIKE ? ");
   $sql->bindValue(1,$request,PDO::PARAM_STR);
   $sql->bindValue(2,$request,PDO::PARAM_STR);
   $sql->execute();
   
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

?>