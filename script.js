
var menu = document.querySelector('#menu-toggler');
var toggler = document.querySelector('.toggler');
var line = document.getElementsByClassName('line');

function hamburger(){
    if(menu.classList.contains('opened')){
        line[0].classList.add('cross1');
        line[1].classList.add('cross2');
        line[2].classList.add('cross3');}
    else{
        line[0].classList.remove('cross1');
        line[1].classList.remove('cross2');
        line[2].classList.remove('cross3');
        }
}

toggler.addEventListener('click',(e)=>{     
    if(menu.classList.contains('opened')){
    menu.classList.remove('opened');
    menu.classList.add('closed');
   hamburger();
    }else{
    menu.classList.remove('closed');
    menu.classList.add('opened');
    hamburger();
}});