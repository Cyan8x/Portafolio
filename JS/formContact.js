//? Efects of labels in inputs

let input_name = document.getElementsByClassName('field-name');
let input_email = document.getElementsByClassName('field-email');
let textarea = document.getElementsByClassName('field-msg');

let lbl_name = document.getElementById('name');
let lbl_email = document.getElementById('email');
let lbl_msg = document.getElementById('msg');

let label = document.getElementsByClassName("lbl");

input_name[0].addEventListener('keyup',function(){
    if (this.value.length>=1) {
        lbl_name.classList.add('aux');
        label[0].classList.remove("required");
    } else {
        lbl_name.classList.remove('aux');
        label[0].classList.add("required");
    }
})


input_email[0].addEventListener('keyup',function(){
    if (this.value.length>=1) {
        lbl_email.classList.add('aux');
        if (validateEmail(this.value) === false) {
            label[1].classList.add("required");
        }else{
            label[1].classList.remove("required");
        }
    } else {
        lbl_email.classList.remove('aux');
        label[1].classList.add("required");
    }
})

textarea[0].addEventListener('keyup',function(){
    if (this.value.length>=1) {
        lbl_msg.classList.add('aux');
        label[2].classList.remove("required");
    } else {
        lbl_msg.classList.remove('aux');
        label[2].classList.add("required");
    }
})

//? Send Form

// My email
let myEmail = "u19219126@utp.edu.pe";
// The form
let form = document.querySelector('#form');

function validateEmail(email) {
    let expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    if (!expresion.exec(email)) {
        return false;
    }else{
        return true;
    }
}

function showErrorForm(textError) {
    let $contain_error = document.getElementById('messages');
    let $error = document.createElement('p');
    $error.innerHTML = textError;
    $error.classList.add('error');
    $contain_error.appendChild($error);
    setTimeout(() => {
        $error.classList.add('hide-message');
    }, 5000);
}

function showSuccessForm(textSuccess) {
    let $contain_success = document.getElementById('messages');
    let $success = document.createElement('p');
    $success.innerHTML = textSuccess;
    $success.classList.add('success');
    $contain_success.appendChild($success);
    setTimeout(() => {
        $success.classList.add('hide-message');
    }, 5000);
}

// Send Email
form.addEventListener('submit',(e)=>{
    e.preventDefault();

    let $name = document.querySelector('.field-name').value;
    let $email = document.querySelector('.field-email').value;
    let $msg = document.querySelector('.field-msg').value;

    if ($name===''||$email===''||$msg==='') {
        showErrorForm("Fill in the required fields, please.");
        if ($name==='') {
            label[0].classList.add("required");
        }
        if ($email==='') {
            label[1].classList.add("required");
        }
        if ($msg==='') {
            label[2].classList.add("required");
        }
    } else {
        let formData = new FormData(form);
        formData.append('email',myEmail);

        const url = './../PHP/contact3.php';

        fetch(url,{
            method : 'POST',
            body : formData
        }).then((response)=>response.json())
        .then((dato)=>{
            if (!dato.error) {
                showSuccessForm(dato.message)
				$nombre = ''
				$telefono = ''
				$mensaje = ''
				$correo = ''
			} else {
                showErrorForm(dato.message);
                form.reset();
			}
        })
    }
})

if (window.history.replaceState) {
    window.history.replaceState(null,null,window.location.href);
}