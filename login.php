<?php
session_start();

// Assumi che ci sia una funzione di calcolo del totale già definita
function calculateTotal() {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Applica lo sconto del 20%
function applyDiscount($total) {
    return $total * 0.8;
}

$errorMessage = '';
$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;
$totalPrice = calculateTotal();
$discountedPrice = applyDiscount($totalPrice);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'user' && $password == 'password') {
        $_SESSION['isLoggedIn'] = true;
        $isLoggedIn = true;
        
        header('Location: http://localhost/Classe114/php-oop-2/cart.php');
        exit();
    } else {
        $errorMessage = 'Username o password non validi.';
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Login</h2>
        <?php if ($errorMessage): ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <?php if (!$isLoggedIn): ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        <?php else: ?>
            <p>Sei già loggato. <a href="http://localhost/Classe114/php-oop-2/cart.php">Vai al carrello</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
