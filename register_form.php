<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="main.css">
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
                <!-- TODO show/hide pass -->
                <label for="pass-name"><img src="./img/newlock.png" alt="User"></label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>
            <hr class="input-line" for="password">
            <div class="user-input confirm-pass">
                <label for="conpass-name"><img src="./img/newlock.png" alt="User" ></label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm password" required>
                <span><img src="./img/kindpng_3408991.png" alt="eye"></span>
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
</body>
</html>