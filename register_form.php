<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="cssmain.css">
</head>
<body>
    <div class="container" id="Registration">
        <h1><span class="letters2">Re</span>gistration</h1>        
        <form id="register_form" action="/login-form/register.php" method="POST">
            <div class="user-input">
                <img src="./img/User_png.png" alt="User">
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <hr class="input-line" for="username">
            <div class="user-input">
                <label for="email-name" ><img src="./img/1237089.png" alt="User"></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <hr class="input-line" for="email">
            <div class="user-input">
                <label for="pass-name"><img src="./img/newlock.png" alt="User"></label>
                <input onkeyup="validatePassword(this.value);" type="password" id="password" name="password" placeholder="Create a password"  required>
                <span style="font-size: 12px; position:static; margin-left:10px;" id="msg" class="msg"></span>
            </div>
            <hr class="input-line" for="password">
            <div class="user-input confirm-pass">
                <label for="conpass-name"><img src="./img/newlock.png" alt="User" ></label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm password" required>
                <span><img id="eye_toggle" class="eye" src="./img/kindpng_3408991.png" alt="eye"></span>
            </div>
            <hr class="input-line" for="password_confirm">
            
            <label for="accept">
                <input id="accept" name="accept_terms" type="checkbox" required>
                <span id="accept_text">I accept all terms &amp conditions</span>
            </label>
            
            <button id="submit_btn" href="#" class="button"> Register Now</button>
        </form>
        
        <nav class="below-button">
            <cite>Already have an account?</cite> <a href="/login-form/login_form.php"> Log in now?</a>
        </nav>
    </div>
    <script src="./register.js"></script>
    <script>
        var passwordEL = document.getElementById("password");
        var togglepassword = document.getElementById("eye_toggle");
        var passwordConEL = document.getElementById("password_confirm");

        togglepassword.addEventListener("click", function(){

        const type = passwordEL.getAttribute("type") === "password" ? "text": "password";
            passwordConEL.setAttribute("type", type)
            passwordEL.setAttribute("type", type)

        });
        const form = document.querySelector("form");
            form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>

    <script>
        function validatePassword(password) {
            
            if (password.length === 0) {
                document.getElementById("msg").innerHTML = "";
                return;
            }
            var matchedCase = new Array();
            matchedCase.push("[$@$!%*#?&]");
            matchedCase.push("[A-Z]");
            matchedCase.push("[0-9]");
            matchedCase.push("[a-z]");

            
            var ctr = 0;
            for (var i = 0; i < matchedCase.length; i++) {
                if (new RegExp(matchedCase[i]).test(password)) {
                    ctr++;
                }
            }
            
            var color = "";
            var strength = "";
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
        }
    </script>
</body>
</html>