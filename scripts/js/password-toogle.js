const password = document.getElementById('password');
const passwordIcon = document.querySelector('.password-toogle-icon i');

passwordIcon.addEventListener('click' , function(){
    if(password.type ==="password"){
        password.type = "text";
        passwordIcon.classList.remove("fa-eye");
        passwordIcon.classList.add("fa-eye-slash");
    }else if(password.type ==="text"){
        password.type = "password";
        passwordIcon.classList.remove("fa-eye-slash");
        passwordIcon.classList.add("fa-eye");
    }
})