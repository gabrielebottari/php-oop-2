<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    if (!isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName] = [
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1
        ];
    } else {
        
        $_SESSION['cart'][$productName]['quantity']++;
    }

    header('Location: http://localhost/Classe114/php-oop-2/cart.php');
    exit();
}
?>
