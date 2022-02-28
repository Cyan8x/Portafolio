//? Icon ham of nav

const ham = document.querySelector('.ham');
const links = document.querySelector('#nav');
// const nav = document.getElementsByTagName('nav');
const bars = document.querySelectorAll('.ham span');

ham.addEventListener('click', ()=>{
    links.classList.toggle('active');
    bars.forEach(child => {
        child.classList.toggle('efect');
    })
})