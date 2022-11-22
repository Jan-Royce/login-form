<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="frontmain.css">
</head>
<body>
    <div>
        <div class="container">
            <?php
                session_start();
                $username = '';
                if(isset($_SESSION['username'])) {
                    $username = $_SESSION['username'] . ", ";
                } else {
                    header("location: /login-form/login_form.php");
                }
            ?>
            <section>
                <h1><?php echo $username; ?> Welcome To AISAT</h1>
                <hr>
                <h2>LET YOUR DREAM TAKE FLIGHT</h2>
            </section>
            
            <form action="/login-form/logout.php" method="POST">
                <button class="button-hover" type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>