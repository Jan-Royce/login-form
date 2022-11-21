var usernameEl = document.getElementById('username');
var passwordEl = document.getElementById('password');

document.getElementById('submit_btn').addEventListener('click', function (event) {
    event.preventDefault();

    Array.from(document.getElementsByClassName('input-line')).forEach(function (el) {
        el.style.borderColor = "#dfdede";
    });

    let valid = true;

    if (!usernameEl.checkValidity()) {
        document.querySelector('hr[for="username"]').style.borderColor = "red";
        valid = false;
    }

    if (!passwordEl.checkValidity()) {
        document.querySelector('hr[for="password"]').style.borderColor = "red";
        valid = false;
    }

    if (valid) {
        document.getElementById('login_form').submit();
    }
});

usernameEl.addEventListener('input', function () {
    document.querySelector('hr[for="username"]').style.borderColor = "#dfdede";
    if (!usernameEl.checkValidity()) {
        document.querySelector('hr[for="username"]').style.borderColor = "red";
    }
});

passwordEl.addEventListener('input', function () {
    document.querySelector('hr[for="password"]').style.borderColor = "#dfdede";
    if (!passwordEl.checkValidity()) {
        document.querySelector('hr[for="password"]').style.borderColor = "red";
    }
});