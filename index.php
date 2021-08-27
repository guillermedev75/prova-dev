<!-- Onde o controlador php é "importado" para a pagina -->
<?php require 'backend/controller.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendarro LTDA</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <header class="container">

        <div class="img">
            <img src="img/logo.png">
        </div>
        <div>
            <h1>Vendarro LTDA</h1>
        </div>

    </header>

    <!-- Barra de pesquisa usa o method GET por url -->
    <div class="container searchContainer">

        <form action="#" method="GET" class="searchBar">
            <input type="text" name="pesquisa" placeholder="Digite alguma coisa...">
            <img src="img/lupa.png" alt="lupa">
        </form>

    </div>
    
    <!-- modelos de carro que apareceram pela pesquisa -->
    <div class="productContainer container">

        <?php if($carros): ?>
            
            <!-- Conta quantos modelos de carros foram encontrados-->
            <h1><?= count($carros) ?> Carros encontrados:</h1>
            
            <!-- Laço para exibir os modelos recuperados do banco de dados-->
            <?php foreach ($carros as $carro): ?>
            
                <div class="product">

                    <img src="img/<?= $carro['nome']?>">
                    
                    <div class="legend">
                        <h2 class="title"><?= $carro['nome']?></h2>
                        <p class="price">R$ <?= $carro['preco']?></p>
                    </div>

                </div>

            <?php endforeach; ?>

        <!-- Retorna erro -->
        <?php else: ?>
            <h2>Erro no servidor...</h2>
        <?php endif ?>

    </div>

</body>

</html>