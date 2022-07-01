const openModalBtn = document.querySelectorAll('[data-modal-target]');
const closeModalBtn = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');
let hideBtn = document.getElementById('hide');
let timerDiv = document.getElementById('timer');

hideBtn.addEventListener('click',()=>{
    timerDiv.classList.toggle('disapper');
})

openModalBtn.forEach(button =>{
    button.addEventListener('click', ()=>{
        const modal =  document.querySelector(button.dataset.modalTarget);
        openModal(modal);
    })
})

function openModal(modal){
    if(modal == null) return
    modal.classList.add('active');
    overlay.classList.add('active');
}

closeModalBtn.forEach(button =>{
    button.addEventListener('click', ()=>{
        const modal =  button.closest('.modal');
        closeModal(modal);
    })
})

function closeModal(modal){
    if(modal == null) return
    modal.classList.remove('active');
    overlay.classList.remove('active');
}

overlay.addEventListener('click', ()=>{
    const modals = document.querySelectorAll('.modal.active');
    modals.forEach(modal => {
        closeModal(modal);
    })
})


const InpBox_1 = document.getElementById('checked_1');
const ckBox_1 = document.getElementById('ck_1');
const InpBox_2 = document.getElementById('checked_2');
const ckBox_2 = document.getElementById('ck_2');
const InpBox_3 = document.getElementById('checked_3');
const ckBox_3 = document.getElementById('ck_3');
const InpBox_4 = document.getElementById('checked_4');
const ckBox_4 = document.getElementById('ck_4');

const BoolBox_1 = document.getElementById('checked_11');
const ckBool_1 = document.getElementById('ck_11');
const BoolBox_2 = document.getElementById('checked_22');
const ckBool_2 = document.getElementById('ck_22');

InpBox_1.addEventListener('click', ()=>{
    ckBox_1.click()
})
InpBox_2.addEventListener('click', ()=>{
    ckBox_2.click()
})
InpBox_3.addEventListener('click', ()=>{
    ckBox_3.click()
})
InpBox_4.addEventListener('click', ()=>{
    ckBox_4.click()
})

BoolBox_1.addEventListener('click', ()=>{
    ckBool_1.click()
})
BoolBox_2.addEventListener('click', ()=>{
    ckBool_2.click()
})