<?php
require "../connection.php";

$requestType = $_GET["type"];

if($requestType == "get-brands"){
   $sql = $connection->query("SELECT * FROM marcas");
   $result = json_encode($sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false);

   echo $result;
}

if($requestType == "get-all-cards"){
   $sql = $connection->query("SELECT * from carros");
   $result = json_encode($sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false);

   echo $result;
}

?>