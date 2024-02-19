<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentYear = date("Y");
    $currentMonth = date("m");

    $expiryMonth = $_POST['expiryMonth'];
    $expiryYear = $_POST['expiryYear'];

    if ($expiryYear < $currentYear || ($expiryYear == $currentYear && $expiryMonth < $currentMonth)) {
        
        echo "La carta di credito è scaduta.";
        
    } else {

        $_SESSION['cart'] = [];

        header("Location: payment-success.php");
        exit();
    }
}
?>
