<?php
session_start();

function calculateTotal($cartItems) {
    $total = 0;
    foreach ($cartItems as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

$isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'];
$totalPrice = calculateTotal($_SESSION['cart']);
$discountedPrice = $isLoggedIn ? $totalPrice * 0.8 : $totalPrice;


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Il tuo Carrello</h2>
        <?php if (empty($_SESSION['cart'])): ?>
            <p>Il tuo carrello è vuoto.</p>
        <?php else: ?>
            <table class="table">
                            <table class="table">
                <thead>
                    <tr>
                        <th>Prodotto</th>
                        <th>Prezzo</th>
                        <th>Quantità</th>
                        <th>Subtotale</th>
                        <th>Azione</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $productName => $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td>€<?php echo htmlspecialchars($item['price']); ?></td>
                            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                            <td>€<?php echo htmlspecialchars($item['price'] * $item['quantity']); ?></td>
                            <td>
                                <form action="http://localhost/Classe114/php-oop-2/remove-from-cart.php" method="post">
                                    <input type="hidden" name="productName" value="<?php echo htmlspecialchars($productName); ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Rimuovi</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Totale</strong></td>
                        <td><strong>€<?php echo number_format($totalPrice, 2); ?></strong></td>
                    </tr>
                </tbody>
            </table>
            </table>
            <p><strong>Totale senza sconto: €<?php echo number_format($totalPrice, 2); ?></strong></p>
            <?php if ($isLoggedIn): ?>
                <p><strong>Sconto applicato (20%): €<?php echo number_format($totalPrice - $discountedPrice, 2); ?></strong></p>
            <?php endif; ?>
            <p><strong>Totale: €<?php echo number_format($discountedPrice, 2); ?></strong></p>
            <?php if ($isLoggedIn): ?>
                <a href="payment.php" class="btn btn-success">Procedi al Pagamento</a>
            <?php else: ?>
                <a href="checkout.php" class="btn btn-primary">Accedi per Continuare</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>


