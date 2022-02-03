$(document).ready(function(){

    let emailInput           = $("#emailInput");
    let userInput            = $("#userInput");
    let passwordInput        = $("#pwInput");
    let verifyPasswordInput  = $("#verifyPwInput");
    
    let showPw               = $("#showPw")
    let showPwRepeat         = $("#showPwRepeat")
    let hidePw               = $("#hidePw")
    let hidePwRepeat         = $("#hidePwRepeat")

    let cadastroBtn          = $("#cadastroBtn");

    emailInput.keyup(function(){

        let emailString = $(this).val()
        verifyEmail(emailString)

    })

    userInput.keyup(function(){

        let userString = $(this).val()
        verifyUser(userString)

    })

    passwordInput.keyup(function(){

        $(".passwordInfo").slideDown("fast")

        let pwString = $(this).val()
        verifyPw(pwString)

    })

    verifyPasswordInput.keyup(function(){

        let repeatString = $(this).val()
        repeatPw(repeatString)

    })

    showPw.click(function(){
        passwordInput.attr("type","text")
        showPw.hide()
        hidePw.show()
    })

    hidePw.click(function(){
        passwordInput.attr("type","password")
        hidePw.hide()
        showPw.show()
    })

    showPwRepeat.click(function(){
        verifyPasswordInput.attr("type","text")
        showPwRepeat.hide()
        hidePwRepeat.show()
    })

    hidePwRepeat.click(function(){
        verifyPasswordInput.attr("type","password")
        hidePwRepeat.hide()
        showPwRepeat.show()
    })

    const verifyEmail = (emailString) => {

        let emailLabel = $("#emailLabel")
        emailLabel.removeClass("labelError")
        emailLabel.html("Email:")
        
        let emailValidate = validateEmail(emailString)
        if (!emailValidate) {
            emailLabel.addClass("labelError")
            emailLabel.html("Email Inválido!")
            return
        }

    }

    const verifyUser = (userString) => {

        let userLabel = $("#userLabel")
        userLabel.removeClass("labelError")
        userLabel.html("Usuário:")

        let userValidate = validateUser(userString,6)
        if (!userValidate) {
            userLabel.addClass("labelError")
            userLabel.html("Usuário Inválido!")
            return
        }

    }

    const verifyPw = (passwordString) => {

        let pwLabel = $("#pwLabel")
        pwLabel.removeClass("labelError")
        pwLabel.html("Senha:")

        let passwordValidate = validatePasswordForce(passwordString)
        if (!passwordValidate) {
            pwLabel.addClass("labelError")
            pwLabel.html("Senha Inválida!")
            $(".passwordInfo").addClass("labelError")
            
            return
        } else {
            $(".passwordInfo").removeClass("labelError")
            $(".passwordInfo").slideUp("fast")
        }

    }

    const repeatPw = (repeatPasswordString) => {

        let verifyPwLabel = $("#verifyPwLabel")
        verifyPwLabel.removeClass("labelError")
        verifyPwLabel.html("Digite a senha novamente:")

        let passwordRoot = passwordInput.val()
        let repeatValidate = validatePasswordRepeat(passwordRoot, repeatPasswordString)
        if (!repeatValidate) {
            verifyPwLabel.addClass("labelError")
            verifyPwLabel.html("As senhas não batem!")
            return
        }

    }

})