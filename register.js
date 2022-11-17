var usernameEl = document.getElementById('username');
var emailEl = document.getElementById('email');
var passwordEl = document.getElementById('password');
var passwordConfirmEl = document.getElementById('password_confirm');
var acceptEl = document.getElementById('accept');

document.getElementById('submit_btn').addEventListener('click', function(event) {
    event.preventDefault();
    
    document.getElementById('accept_text').style.color = "grey";
    Array.from(document.getElementsByClassName('input-line')).forEach(function(el) {
        el.style.borderColor = "#dfdede"; 
    });
    
    let valid = true;
    
    if (!usernameEl.checkValidity()) {
        document.querySelector('hr[for="username"]').style.borderColor = "red";
        valid = false;
    }
    
    if (!emailEl.checkValidity()) {
        document.querySelector('hr[for="email"]').style.borderColor = "red";
        valid = false;
    }
    
    if (!passwordEl.checkValidity()) {
        document.querySelector('hr[for="password"]').style.borderColor = "red";
        valid = false;
    }
    
    if (!passwordConfirmEl.checkValidity()) {
        document.querySelector('hr[for="password_confirm"]').style.borderColor = "red";
        valid = false;
    }
    
    if (passwordEl.value != passwordConfirmEl.value) {
        document.querySelector('hr[for="password"]').style.borderColor = "red";
        document.querySelector('hr[for="password_confirm"]').style.borderColor = "red";
        valid = false;
    }
    
    if (!acceptEl.checkValidity()) {
        document.getElementById('accept_text').style.color = "red";
        valid = false;
    }
    
    if(valid) {
        document.getElementById('register_form').submit();
    }
});

usernameEl.addEventListener('input', function() {
    document.querySelector('hr[for="username"]').style.borderColor = "#dfdede";
    if (!usernameEl.checkValidity()) {
        document.querySelector('hr[for="username"]').style.borderColor = "red";
    }
});

emailEl.addEventListener('input', function() {
    document.querySelector('hr[for="email"]').style.borderColor = "#dfdede";
    if (!emailEl.checkValidity()) {
        document.querySelector('hr[for="email"]').style.borderColor = "red";
    }
});

passwordEl.addEventListener('input', function() {
    document.querySelector('hr[for="password"]').style.borderColor = "#dfdede";
    if (!passwordEl.checkValidity()) {
        document.querySelector('hr[for="password"]').style.borderColor = "red";
    }
});

passwordConfirmEl.addEventListener('input', function() {
    document.querySelector('hr[for="password_confirm"]').style.borderColor = "#dfdede";
    if (!passwordConfirmEl.checkValidity()) {
        document.querySelector('hr[for="password_confirm"]').style.borderColor = "red";
    }
});

acceptEl.addEventListener('change', function() {
    document.getElementById('accept_text').style.color = "grey";
    if (!acceptEl.checked) {
        document.getElementById('accept_text').style.color = "red";
    }
});