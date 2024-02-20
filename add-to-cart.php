<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productQuantity = $_POST['productQuantity'];

    //Mi assicura che la quantità sia un numero valido
    $productQuantity = filter_var($productQuantity, FILTER_VALIDATE_INT);
    $productQuantity = ($productQuantity > 0) ? $productQuantity : 1;

    if (!isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName] = [
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $productQuantity
        ];
    } else {
        // Aggiorna la quantità per questo prodotto nel carrello
        $_SESSION['cart'][$productName]['quantity'] += $productQuantity;
    }

    header('Location: http://localhost/Classe114/php-oop-2/cart.php');
    exit();
}
?>

