$(document).ready(function() {

    let menuNavigation   = $(".menuNavigation")
    let openMenu         = $(".openMenu")
    let closeMenu        = $(".closeMenu")
    let containerClose   = $(".containerClose")

    openMenu.click(function() {
        menuNavigation.slideDown("fast")
        openMenu.hide()
        closeMenu.show()
        containerClose.fadeIn("fast")
    })
    
    closeMenu.click(function() {
        menuNavigation.slideUp("fast")
        closeMenu.hide()
        openMenu.show()
        containerClose.fadeOut("fast")
    })
    
    containerClose.click(function() {
        menuNavigation.slideUp("fast")
        closeMenu.hide()
        openMenu.show()
        containerClose.fadeOut("fast")
    })

})