let input_name = document.getElementsByClassName('field-name');
let input_email = document.getElementsByClassName('field-email');
let textarea = document.getElementsByClassName('field-msg');

let lbl_name = document.getElementById('name');
let lbl_email = document.getElementById('email');
let lbl_msg = document.getElementById('msg');

input_name[0].addEventListener('keyup',function(){
    if (this.value.length>=1) {
        lbl_name.classList.add('aux');
    } else {
        lbl_name.classList.remove('aux');
    }
})

input_email[0].addEventListener('keyup',function(){
    if (this.value.length>=1) {
        lbl_email.classList.add('aux');
    } else {
        lbl_email.classList.remove('aux');
    }
})

textarea[0].addEventListener('keyup',function(){
    if (this.value.length>=1) {
        lbl_msg.classList.add('aux');
    } else {
        lbl_msg.classList.remove('aux');
    }
})


const ham = document.querySelector('.ham');
const links = document.querySelector('.nav-ul');
const nav = document.getElementsByTagName('nav');
const bars = document.querySelectorAll('.ham span');

ham.addEventListener('click', ()=>{
    links.classList.toggle('active');
    nav[0].classList.toggle('nav-fix');
    bars.forEach(child => {
        child.classList.toggle('efect');
    })
})