<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/pages/home.css">
   <script src="js/home.js"></script>
   <title>Home - Vendarro LTDA</title>
</head>
<body>
   <div class="content">
      <div class="searchBarContainer">
         <form action="">
            <input type='text' id='search' placeholder='Digite alguma coisa...'>
               <i class="fas fa-filter filterIcon"></i>
               <i class="fas fa-close filterIconClose"></i>
            </input>
            <div class='filterBox'>
               <button type="button" id="cleanBtn" class="cleanBtn">
                  Limpar
               </button>
               <select id="brandSelect" class="brandSelect">
                  <option value="" selected>Marcas</option>
               </select>
            </div>
         </form>
      </div>
      <div class="productContainer">
         <div class="productTitle">
            <h2 id="countProducts"></h2>
         </div>
         <div class="cardContainer">
         </div>
      </div>
   </div>
</body>