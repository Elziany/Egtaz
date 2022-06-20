const openModalBtn = document.querySelectorAll('[data-modal-target]');
const closeModalBtn = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');
const option=document.getElementById('option1');

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

option.addEventListener('click', ()=>{
    const radio = document.querySelectorAll('#radio1');
    radio.checked=true;
})


