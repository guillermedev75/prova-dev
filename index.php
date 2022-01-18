<?php 
   require "controller.php";

   if($_GET['busca']) {
      // $carros = getCarrosFromDbFilterName($_GET['busca']);
      $carros = getCarrosFromDb();

   } else {
      $carros = getCarrosFromDb();
   }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>Vendarro LTDA</title>
   <script>
      function comprar() {
         alert('Seu nome está sujo!')
      }
   </script>
</head>

<body>
    
   <header>
      <div class="headerContent">
         <div class="logoContainer">
            <img src="img/logo.png" alt="vendarro.png">
         </div>
         <div class="titleContainer">
            <h1>Vendarro LTDA</h1>
         </div>
      </div>
   </header>

   <div class="content">
      <div class="searchBarContainer">
         <form method="GET">
            <input type="text" name="busca" placeholder="Digite alguma coisa..."></input>
            <button class="searchIcon">
               <i class="fas fa-search"></i>
            </button>
         </form>
      </div>
      <div class="productContainer">
         <div class="productTitle">
            <h2><?= sizeof($carros) ?>Carros encontrados:</h2>
         </div>
         <div class="cardContainer">
               <?php
                  // getCarros()
                  printCarros($carros);
               ?>
         </div>
      </div>
   </div>

</body>
</html>