<?php
session_start();

// Fshi sesionin
session_unset();
session_destroy();

// Fshi cookie për produktet në shportë
$cookie_name = "cart_products";
setcookie($cookie_name, "", time() - 3600, "/");

// Kthehu tek faqja e fillimit (index.php)
header("Location: index.php");
exit;
?>