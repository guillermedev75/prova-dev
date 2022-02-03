<head>
    <title>Cadastro - Vendarro LTDA</title>
    <link rel="stylesheet" href="assets/css/pages/cadastro.css">
    <script src="assets/js/global.js"></script>
    <script src="assets/js/pages/cadastro.js"></script>
</head>

<body>

    <div class="header">
        <h2>Crie sua Conta</h2>
    </div>

    <div class="container">


        <form onsubmit="return false;">

            <label for="email" id="emailLabel">Email:</label>
            <input type="text" id="emailInput">
            <label for="user" id="userLabel">Usuário:</label>
            <input type="text" id="userInput">
            <label for="pw" id="pwLabel">Senha:</label>
            <input type="password" id="pwInput">
            <span class="mostrarSenha1" id="showPw">Mostrar</span>
            <span class="mostrarSenha1 invisible" id="hidePw">Ocultar</span>
            <div class="passwordInfo">
                <p>*Mínimo de 8 Caracteres</p>
                <p>*Letra Minúscula ( abc )</p>
                <p>*Letra Maiúscula ( ABC )</p>
                <p>*Número ( 12345 )</p>
                <p>*Caracteres Especiais ( !@#$% )</p>
            </div>
            <div class="repeatPw">
                <label for="verifyPw" id="verifyPwLabel">Digite a senha novamente:</label>
                <input type="password" id="verifyPwInput">
                <span class="mostrarSenha2" id="showPwRepeat">Mostrar</span>
                <span class="mostrarSenha2 invisible" id="hidePwRepeat">Ocultar</span>
            </div>

        </form>

        <button type="button" id="cadastroBtn">
            Cadastrar
        </button>

    </div>

</body>