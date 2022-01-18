<?php

require "connection.php";
 
function getAllCards() {
   global $connection;

   $sql = $connection->query("SELECT * from carros");
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

function getSearchCard() {
   global $connection;

   $request = $_GET['busca'];
   $sql = $connection->query("SELECT C.nome,marca,preco,foto from carros C JOIN marcas M ON M.id = C.marca WHERE C.nome LIKE '%$request%' OR M.nome LIKE '%$request%'");
   $result = $sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false;

   return $result;
}

function listCards($result) {
   for($i = 0; $i < sizeof($result); $i++){

      $nome  = $result[$i]['nome'];
      $foto  = $result[$i]['foto'];
      $preco = $result[$i]['preco'];

         echo "
               <div class='productCard' onClick='comprar()'>
                  <img src='img/$foto'></img>
                  <h3 class='productName'>$nome</h3>
                  <h3 class='productValue'>R\$$preco</h3>
               </div>";
   }
}

// function countCards() {
//    global $dataSearch;
//    $resLen = sizeof($dataSearch);

//    echo $resLen;
// }

function getCarros() {
   if(isset($_GET['busca'])) {
      $dataSearch = getSearchCard();
      listCards($dataSearch);
   }
   else {
      $dataSearch = getAllCards();
      listCards($dataSearch);
   }
}

function getCarrosFromDb() {


   return [
      [
         'nome' => 'Jaguar',
         'preco' => 200000
      ],
      [
         'nome' => 'fklasjf',
         'preco' => 32100
      ],
      [
         'nome' => 'lorena',
         'preco' => 77000
      ],
   ];

}

function printCarros($carros) {

   foreach($carros as $carro) {
      echo $carro['nome'] . '<br>';
      echo $carro['preco'] . '<br>';
   }

}


?>