<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['productName'])) {
    $productName = $_POST['productName'];

    if (isset($_SESSION['cart'][$productName])) {
        unset($_SESSION['cart'][$productName]);
    }

    header('Location: http://localhost/Classe114/php-oop-2/cart.php');
    exit();
}
?>