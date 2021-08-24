<html>

    <head>
        <title>Vendarro</title>
        <link rel="stylesheet" href="style.css">
        <link rel = "preconnect" href = "https://fonts.googleapis.com">
        <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
        <link href = "https: //fonts.googleapis.com/css2? family = Roboto: wght @ 300 & display = swap "rel =" stylesheet ">
    </head>

    <body>

        <div class="container">

            <div class="header">

                <img src="img\logo.png">
                <h2>Vendarro LTDA</h2>

            </div>
            
            <input type="text" value="" placeholder="Digite alguma coisa..." id="pesquisa" name="pesquisa">
            <img src="img\Vector.png" onClick="submit" class="lupa">

            <div class="content">

                <h2>Carros encontrados:</h2>

                <div class="cars">

                    <div class="car">
                        <img src="img\jaguar-fake.jpg" class="carImg" id="imgCar">
                        <h2 id="nameCar">Jaguar Fake</h2>
                        <h3 id="valueCar">R$ 13,99</h3>
                    </div>
                    <div class="car">
                        <img src="img\jaguar-fake.jpg" class="carImg">
                        <h2 id="nameCar">Jaguar Fake</h2>
                        <h3 id="valueCar">R$ 13,99</h3>
                    </div>
                    <div class="car">
                        <img src="img\jaguar-fake.jpg" class="carImg">
                        <h2 id="nameCar">Jaguar Fake</h2>
                        <h3 id="valueCar">R$ 13,99</h3>
                    </div>
                    <div class="car">
                        <img src="img\jaguar-fake.jpg" class="carImg">
                        <h2 id="nameCar">Jaguar Fake</h2>
                        <h3 id="valueCar">R$ 13,99</h3>
                    </div>

                </div>

            </div>
            
        </div>

        <?php
        $conexao=mysqli_connect("127.0.0.1","root","","db_carros");

        ?>

    </body>

</html>