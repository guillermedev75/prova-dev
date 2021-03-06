$(document).ready(function(){
    const urlApi = "../src/controller.php"

    let dataCards
    let strSearch
    let brandSelected
    let lastSearch = []
    let lastBrand  = []

    $("#search").keyup(function() {
        strSearch = $(this).val()
        searchCards()
    })

    $("#brandSelect").change(function() {
        brandSelected = $(this).val()
        console.log(brandSelected)
        searchCards() 
    })

    $("#cleanBtn").click(() => {
        cleanCards()
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

        cardContainer.fadeOut("fast")
        cardContainer.html("")
        productTitle.html("")
        
        
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

        cardContainer.fadeIn("fast").animate({ opacity : "1"},("fast"))
        productTitle.fadeIn("fast").animate({ opacity : "1"},("fast"))
        
        $(".productCard").click(() => {
             alert('Seu nome est?? sujo!') 
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

    const searchCards = () => {

        let cardsFiltered = dataCards
        console.log(strSearch.length)

        if(brandSelected){
            cardsFiltered = cardsFiltered.filter(search => search.marca.indexOf(brandSelected)> -1)
            if(strSearch.length != 1 && brandSelected)
            cardsFiltered = cardsFiltered.filter(search => search.nome.toLowerCase().indexOf(strSearch.toLowerCase())> -1 && search.marca.indexOf(brandSelected)> -1)
        }
        else if(strSearch.length != 1 && strSearch)
            cardsFiltered = cardsFiltered.filter(search => search.nome.toLowerCase().indexOf(strSearch.toLowerCase())> -1)
        else {
            listCards(dataCards)
            lastSearch = []
            lastSearch = []
        }

        let verifySameArray = JSON.stringify(cardsFiltered) === JSON.stringify(lastSearch)
        let verifySameBrand = JSON.stringify(cardsFiltered) === JSON.stringify(lastBrand)

        console.log(verifySameArray)
        console.log(verifySameBrand)

        if(!verifySameArray || !verifySameBrand) {
            lastSearch = cardsFiltered
            lastBrand = cardsFiltered
            listCards(cardsFiltered)
        }

    }

    const cleanCards = () => {
        let verifyArray = lastSearch.length != 0 && lastBrand.length != 0
        if(verifyArray)
            listCards(dataCards)
            $(".filterBox").slideUp("fast");
            $(".filterIconClose").hide();
            $(".filterIcon").show();
            $(".containerClose").fadeOut("fast")
            $("#search").val("")
    }
    
    renderPage()
})