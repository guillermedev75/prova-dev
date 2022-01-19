<?php 
   require "controller.php";
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
      const comprar = () => { alert('Seu nome está sujo!') }
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
            <input type='text' value="<?= isset($_GET['busca']) ? $_GET['busca'] : '' ?>" name='busca' placeholder='Digite alguma coisa...'></input>
            <select name='marca' class="brandSelect">
               <!-- <option value="<?= isset($_GET['busca']) ? $_GET['marca'] : '' ?>" selected><?= isset($_GET['busca']) ? $_GET['marca'] : 'Marcas' ?></option> -->
               <option value="">Marcas</option>
               <?php
                  foreach($marcas as $marca) {
                     $marcaNome = $marca['nome'];
                     $marcaId = $marca['id'];
                     $selected = isset($_GET['marca']) && $_GET['marca'] == $marcaId ? 'selected' : '';

                     echo "<option value='$marcaId' $selected>$marcaNome</option>";
                  }
               ?>
            </select>
            <a href="/prova-dev" class="cleanBtn">
               Limpar
            </a>
            <button class="searchIcon">
               <i class="fas fa-search"></i>
            </button>
         </form>
      </div>
      <div class="productContainer">
         <div class="productTitle">
            <h2><?= sizeof($carros) ?> Carros encontrados:</h2>
         </div>
            <div class="cardContainer">
               <?php 
               if(!count($carros)){
                  echo "<div class='alertErro'>Nenhum carro encontrado!</div>";
               } else {
                  foreach($carros as $carro) {
                     echo "<div class='productCard' onClick='comprar()'>
                     <img src='img/{$carro['foto']}'>
                     <h3 class='productName'>{$carro['nome']}</h3>
                     <h3 class='productValue'>R\${$carro['preco']}</h3>
                     </div>";
                  }
               }
               ?>
         </div>
      </div>
   </div>
</body>
</html>