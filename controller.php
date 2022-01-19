<?php
require "connection.php";
 
function getAllCards($connection) {
   $sql = $connection->query("SELECT * from carros");
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

function getSearchCard($connection, $search, $idMarca) {
   
    $sql = "SELECT C.nome,marca,preco,foto from carros C JOIN marcas M ON M.id = C.marca WHERE 1=1 ";

    if($search) {
        $search = "%".$search."%";
        $sql .= "AND (C.nome LIKE ? OR M.nome LIKE ?) ";
    }

    if($idMarca) {
        $sql .= "AND C.marca = ". (int) $idMarca;
    }

    $stmt = $connection->prepare($sql);

    if($search) {
        $stmt->bindValue(1,$search,PDO::PARAM_STR);
        $stmt->bindValue(2,$search,PDO::PARAM_STR);
    }

   $stmt->execute();
   
   $result = $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

function getBrands($connection) {
   $sql = $connection->query("SELECT * FROM marcas");
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

if(isset($_GET['busca']) or isset($_GET['marca'])) {
   $carros = getSearchCard($connection,$_GET['busca'],$_GET['marca']);
   $marcas = getBrands($connection);
} else {
   $carros = getAllCards($connection);
   $marcas = getBrands($connection);
}
?>