<?php
session_start();


if(isset($_SESSION['loggin']) && $_SESSION['loggin'] === true && $_SESSION['username'] === 'hakip') {

    header("Location: logedin.php");
    exit;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['password'];


    if($username == 'hakip' && $password == '1234') {

        $_SESSION['loggin'] = true;
        $_SESSION['username'] = $username;


        header("Location: logedin.php");
        exit;
    } else {

        $error = "Të dhënat e logimit janë të pasakta. Ju lutem provoni përsëri.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<body>
<div class="login_form" id="Login">
        <div class="left">
            <img src="image/logshoes.png" alt="shoes">
        </div>

        <div class="right" id="login">
            <h1>Welcome Back!</h1>

            <form action="#" method="post">
                <p>User Name</p>
                <div class="user">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user" placeholder="User Name" class="username">
                </div>

                <p class="password_tag">Password</p>
                <div class="password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <p class="forget"> Forget Password ?</p>

                <button type="submit" >Login</button>
                <div class="logging_icon">
                    <a href="#"><img src="image/google.png" alt="google"></a>
                    <a href="#"><img src="image/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="image/twitter.png" alt="twitter"></a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
