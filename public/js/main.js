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


// Join By Code
mybutton = document.getElementById("myBtn");
mybutton.style.display = "block";



/*=============== DARK LIGHT THEME ===============*/
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
})