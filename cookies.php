<!-- Cookies për Products -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == 'hakip' && $password == '1234') {

        $_SESSION['username'] = $username;
        

        $cookie_name = "cart_products";
        $cookie_value = json_encode([]);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 


        header("Location: logedin.php");
        exit;
    } else {

        echo "Invalid username or password.";
    }
}
?>
