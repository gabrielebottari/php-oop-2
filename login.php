<?php
session_start();

// Inizializza $_SESSION['cart'] come un array vuoto se non esiste
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Ora puoi calcolare il totale senza preoccuparti di warning
$totalPrice = calculateTotal($_SESSION['cart']);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-primary-subtle">
    <div class="container mt-4">
        <h2 class="text-primary text-center">Login / Sign-Up</h2>

        <?php if ($errorMessage) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <?php if (!$isLoggedIn) { ?>
            <div class="container d-flex justify-content-center">
                <form action="" method="post" class="w-75">
                    <button type="button" class="btn btn-primary mb-4"><a href="http://localhost/Classe114/php-oop-2/index.php" class="text-white text-decoration-none">Home <i class="fa-solid fa-house text-white"></i></a></button>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login <i class="fa-solid fa-user text-white"></i></button>
                </form>
            </div>
        <?php } else { ?>
            <p>Sei già loggato.</p>
            <button class="btn btn-primary"><a href="http://localhost/Classe114/php-oop-2/cart.php" class="text-white text-decoration-none">Vai al carrello <i class="fa-solid fa-cart-shopping"></i></a></button>
            <button class="btn btn-primary"><a href="http://localhost/Classe114/php-oop-2/index.php" class="text-white text-decoration-none">Torna alla Home <i class="fa-solid fa-house text-white"></i></a></button>
        <?php } ?>
    </div>
</body>
</html>
