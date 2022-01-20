$(document).ready(function(){

    const urlApi = "../src/controller.php"

    
    let dataCards

    $("#search").keyup(() => {
        
    })

    $(".filterIcon").click(function() {
        $(".filterBox").slideDown("fast")
        $(".containerClose").fadeIn("fast")
        $(".filterIconClose").show();
        $(".filterIcon").hide();

    })
    $(".filterIconClose").click(() => {
        $(".filterBox").slideUp("fast");
        $(".filterIconClose").hide();
        $(".filterIcon").show();
        $(".containerClose").fadeOut("fast")
    })
    $(".containerClose").click(() => {
        $(".filterBox").slideUp("fast");
        $(".filterIconClose").hide();
        $(".filterIcon").show();
        $(".containerClose").fadeOut("fast");
    })
    
    const renderPage = () => {
        getAllCards()
        getBrands()
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

    const getBrands = () => {
        $.ajax({
            url:  urlApi,
            method: 'GET',
            dataType: 'json',
            data: {
                type: 'get-brands'
            },
            success: json => {
                dataBrands = json
                listBrands(dataBrands)
            },
            error: () => {
                alert('Error')
            }
        })
    }
    
    const listCards = (dataCards) => {
        let cardContainer = $(".cardContainer")
        let productTitle  = $(".productTitle")
        let dataLen = dataCards.length
        
        
        if (dataLen == 0) {
            cardContainer.html('<div class="alertErro">Nenhum carro encontrado!</div>')
        } else {

            productTitle.html(`<span>${dataLen}</span> Carros Encontrados:`)

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

    const listBrands = (dataBrands) => {
        let selectBrands = $("#brandSelect")
        let dataLen = dataBrands.length
        
        for(let i in dataBrands) {
            let {nome, id} = dataBrands[i]
            
            selectBrands.append(`
                <option value="${id}">${nome}</option>
            `)
        }
    }
    
    renderPage()

})