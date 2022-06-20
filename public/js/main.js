var menuIcon = document.querySelector('.menu');
var sideBar = document.querySelector('.sidebar');
var container = document.querySelector('.container');
var smallSiderBar = document.querySelector('.sidebar');

let addBtn = document.getElementById('add');
var array=[];

menuIcon.onclick = function(){
    sideBar.classList.toggle('small-sidebar');
    container.classList.toggle('large-container');
    smallSiderBar.classList.toggle('appare');
}



let headerBtn = document.querySelectorAll('.header__btn'),
    dropdown = document.querySelectorAll('.dropdown__content');


headerBtn.forEach(function(element, index){
    element.addEventListener('click', function(e){

        if(dropdown[index].style.display == 'inline-block'){
            dropdown[index].style.display = 'none';
        }else{
            dropdown.forEach(function(dropdownContent){
                dropdownContent.style.display = 'none';
            })
            dropdown[index].style.display = 'inline-block';

        }
    })
})


let body = document.querySelector('body');
body.addEventListener('click', function(e){
    // Close dropdown when click outside of them

    let dropdownComponents = [
        'header__btn center',
        'dropdown__content profile__dropdown',
        'drop__down-title',
        'dropdown__content notifictaions__dropdown',
        'dropdown__data',
        'uil uil-user-circle dropdown__icon',
        'uil uil-bell dropdown__icon'
    ];
    if(dropdownComponents.includes(e.target.className)){
        return
    }else{
        dropdown.forEach(function(dropdownContent){
            dropdownContent.style.display = 'none';
        })
    }
})



let themeBtn = document.querySelector('.change__theme-btn'),
    themeIcon = document.querySelector('.theme__icon');

themeBtn.addEventListener('click', function(e){
    let body = document.querySelector('[data-theme]');
    
    if(body.getAttribute('data-theme') == 'light'){
        body.setAttribute('data-theme', 'dark');
        themeIcon.className = 'uil uil-moon';
    }else{
        body.setAttribute('data-theme', 'light');
        themeIcon.className = 'uil uil-sun';
    }
})

