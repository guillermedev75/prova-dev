//Funções gerais

//Validações de campos
const validateEmail = (emailString) => {

    let regex1 = /\S+@\S+\.\S+/
    let regex2 = /\S+\.\S+@\S+\.\S+/
    
    let stringLength = emailString.length

    let validate1 = regex1.test(emailString)
    let validate2 = regex2.test(emailString)

    if(validate1 || validate2 && stringLength > 1) return true
    else return false

}

const validatePasswordForce = (passwordString) => {

    let numbers      = /[0-9]/
    let letters      = /[a-z]/
    let upperLetters = /[A-Z]/
    let specialLetters = /[!|@|#|$|%|^|&|*|(|)|-|_]/
    
    let stringLength = passwordString.length

    let validateString = numbers.test(passwordString) && letters.test(passwordString) && upperLetters.test(passwordString) && specialLetters.test(passwordString)

    if(validateString && stringLength >= 8) return true
    else return false
    
}

const validatePasswordRepeat = (passwordString, passwordRepeat) => {

    if(passwordString == passwordRepeat) return true
    else return false

}

const validateUser = (userString, min) => {

    let stringLength = userString.length

    if(stringLength >= min) return true
    else return false

}
