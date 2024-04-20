<!-- Cookies për Products -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikimi i përdoruesit (shembulli është shumë i thjeshtë, mund të përdorni një sistem më të sigurt të autentifikimit)
    if ($username == 'hakip' && $password == '1234') {
        // Krijimi i sesionit për përdoruesin
        $_SESSION['username'] = $username;
        
        // Vendos një cookie për të ruajtur produktet në shportë
        $cookie_name = "cart_products";
        $cookie_value = json_encode([]);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Ruaj për 30 ditë

        // Përcjellja tek faqja e dëshiruar pas logimit
        header("Location: logedin.php");
        exit;
    } else {
        // Mesazhi i gabimit nëse autentifikimi nuk është i suksesshëm
        echo "Invalid username or password.";
    }
}
?>