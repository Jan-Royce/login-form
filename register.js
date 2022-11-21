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
    
    valid = valid && validatePassword(passwordEl.value);
    
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

passwordEl.addEventListener('input', function() {
    validatePassword(this.value);
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

function validatePassword(password) {
    if (password.length === 0) {
        document.getElementById("msg").innerHTML = "";
        return;
    }
    var matchedCase = new Array();
    matchedCase.push("[A-Z]");
    matchedCase.push("[0-9]");
    matchedCase.push("[a-z]");


    var ctr = 0;
    for (var i = 0; i < matchedCase.length; i++) {
        if (new RegExp(matchedCase[i]).test(password)) {
            ctr++;
        }
    }

    if (password.length > 7) ctr++;

    var color = "";
    var strength = "";
    var valid = true;
    switch (ctr) {
        case 0:
        case 1:
        case 2:
            strength = "Very Weak";
            color = "red";
            valid = false;
            document.querySelector('hr[for="password"]').style.borderColor = "red";
            break;
        case 3:
            document.querySelector('hr[for="password"]').style.borderColor = "#dfdede";
            strength = "Medium";
            color = "orange";
            break;
        case 4:
            document.querySelector('hr[for="password"]').style.borderColor = "#dfdede";
            strength = "Strong";
            color = "green";
            break;
    }
    document.getElementById("msg").innerHTML = strength;
    document.getElementById("msg").style.color = color;
    
    return valid;
}