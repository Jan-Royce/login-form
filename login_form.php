<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="cssmain.css">
</head>
<body>
    <div class="container" id="Login">
        <h1><span class="letters2">Lo</span>gin</h1>
        <p class="error-text">
            <?php 
                session_start();
                if(isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    $_SESSION['error'] = "";
                }
                
                if(!empty($_SESSION['username'])) {
                    header("location: /login-form");
                }
            ?>
        </p>
        <form action="/login-form/login.php" method="POST">
            <div class="user-input">
                <label for="name"><img src="./img/1237089.png" alt="envelope"></label><input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <hr class="input-line" for="username">
            <div class="user-input">
                <!-- TODO show/hide pass -->
                <label for="password"><img src="./img/newlock.png" alt="lock"/></label><input type="password" id="password" name="password" placeholder="Confirm a password"> 
                <span><img id="eye_toggle" class="eye" src="./img/kindpng_3408991.png" alt="eye" ></span>
            </div>
            <hr class="input-line" for="password">

            <div class="afterpass">
                <input type="checkbox" id="checkbox" name="checkbox">
                <label for="checkbox">Remember me</label>
    
                <a href="#">Forgot password?</a>
            </div>

            <button id="submit_btn" class="button">Login Now</button>
        </form>
        <nav class="below-button">
            <cite>Dont Have an account?</cite><a href="/login-form/register_form.php"> Signup now</a>
        </nav>
    </div>
    <script src="./login.js"></script>
    <script>
        var passwordEL = document.getElementById("password");
        var togglepassword = document.getElementById("eye_toggle");

        togglepassword.addEventListener("click", function(){
            const type = passwordEL.getAttribute("type") === "password" ? "text": "password";
            passwordEL.setAttribute("type", type)
        });
    </script>
</body>
</html>