<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/global.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   <title>Vendarro LTDA</title>
   <script src="js/jquery.js"></script>
   <script src="js/global.js"></script>
</head>
<body>
   <div class="containerClose"></div>
   <header>
      <div class="headerContent">
         <div class="logoContainer">
            <a href="">
               <img src="img/logo.png" alt="vendarro.png">
            </a>
            <h1>Vendarro LTDA</h1>
         </div>
         <div class="menuContainer">
            <div class="openMenu">
               <i class="fa fa-bars"></i>
            </div>
            <div class="closeMenu">
               <i class="fa fa-chevron-up"></i>
            </div>
            <div class="menuNavigation">
               <a href="home">Início</a>
               <a href="cadastro">Cadastro</a>
               <a href="login">Entrar</a>
            </div>
         </div>
      </div>
   </header>
   <main>
       <?php require "../src/loader.php" ?>
   </main>
   <footer>
      <p>Version 2.0</p>
   </footer>
</body>
</html>