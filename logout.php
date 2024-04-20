<?php
session_start();


session_unset();
session_destroy();


$cookie_name = "cart_products";
setcookie($cookie_name, "", time() - 3600, "/");


header("Location: index.php");
exit;
?>
