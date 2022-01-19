<?php
require "connection.php";

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

if($requestType == "get-one-card") {

   $search   = $_POST['search'];
   $id_marca = $_POST['id_marca'];

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
  $result = json_encode($stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : false);

  echo $result;
}

// if(isset($_GET['busca']) or isset($_GET['marca'])) {
//    $carros = getSearchCard($connection,$_GET['busca'],$_GET['marca']);
//    $marcas = getBrands($connection);
// } else {
//    $carros = getAllCards($connection);
//    $marcas = getBrands($connection);
// }
?>