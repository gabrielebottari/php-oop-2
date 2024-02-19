<?php
session_start();

$totalPrice = 0;
if(isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
    }
}

$isRegistered = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'];

if ($isRegistered) {
    $totalPrice *= 0.8;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container mt-4">
            <h2>Checkout</h2>
            <p>Totale Ordine: €<?php echo number_format($totalPrice, 2); ?></p>
            
            <?php if (!$isRegistered) { ?>
                <p>Registrati per ricevere uno sconto del 20% sul tuo ordine.</p>
                <a href="http://localhost/Classe114/php-oop-2/login.php" class="btn btn-primary">Registrati/Login</a>
            <?php } ?>
        </div>
    </body>
</html>
