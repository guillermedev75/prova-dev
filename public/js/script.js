$(document).ready(function(){

    const urlApi = "../src/controller.php"

    
    let dataCards

    $("#search").keyup(() => {
        
    })
    
    const renderPage = () => {
        getAllCards()
    }
    
    const getAllCards = () => { 
        
        $.ajax({
            url:  urlApi,
            method: 'GET',
            dataType: 'json',
            data: {
                type: 'get-all-cards'
            },
            success: json => {
                dataCards = json
                listCards(dataCards)
            },
            error: () => {
                alert('Error')
            }
        })
        
    }
    
    const listCards = (dataCards) => {
        let cardContainer = $(".cardContainer")
        let dataLen = dataCards.length
        
        if (dataLen == 0) {
            cardContainer.html('<div class="alertErro">Nenhum carro encontrado!</div>')
        } else {
            for(let i in dataCards) {
                let {nome, preco, foto} = dataCards[i]
                
                cardContainer.append(`
                <div class='productCard'>
                <img src='img/${foto}'>
                <h3 class='productName'>${nome}</h3>
                <h3 class='productValue'>R$${preco}</h3>
                </div>
                `)
            }
        }
        
        $(".productCard").click(() => {
             alert('Seu nome está sujo!') 
        })
    }
    
    renderPage()

})