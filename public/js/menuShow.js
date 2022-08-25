let overlay = document.querySelector('#overlay')
let menu = document.querySelector('#categoryMenu')
let nav = document.querySelector('.navRow')
let main = document.querySelector('main')

function menuShow (){
    overlay.classList.add('showOverlay')
    menu.classList.add('showMenu')
    nav.classList.add('navSlide')
    main.classList.add('mainSlide')
    document.querySelector('body').style.overflow ="hidden";
}

function closeMenu (){
    overlay.classList.remove('showOverlay')
    menu.classList.remove('showMenu')
    nav.classList.remove('navSlide')
    main.classList.remove('mainSlide')
    document.querySelector('body').style.overflow ="auto";
}