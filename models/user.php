<?php

    class user {
        public $isRegistered;
        public $email;

        public function __construct($isRegistered, $email = null) {
            $this->isRegistered = $isRegistered;
            $this->email = $email;
        }
    }

    function purchaseProduct($user, $product) {
        $price = $product->price;
        if ($user->isRegistered) {
            $price *= 0.8; 
            echo "Utente registrato! Hai ricevuto uno sconto del 20% sul prodotto: " . $product->name . "<br>";
        }
        echo "Prezzo finale per " . $product->name . ": €" . number_format($price, 2) . "<br>";
    }

    $registeredUser = new User(true, "user@example.com");
    $guestUser = new User(false);

    purchaseProduct($registeredUser, $products[0]);

    purchaseProduct($guestUser, $products[1]);

    function isCreditCardValid($cardNumber, $expiryMonth, $expiryYear) {
        
        $currentYear = date('Y');
        $currentMonth = date('m');
    
        if (strlen($expiryYear) == 2) {
            $expiryYear = '20' . $expiryYear;
        }
    
        if ($expiryYear < $currentYear || ($expiryYear == $currentYear && $expiryMonth < $currentMonth)) {
            return false; 
        }
    
        return true;
    }
    
    function processPayment($user, $cart, $cardDetails) {
        if (isCreditCardValid($cardDetails['number'], $cardDetails['expiryMonth'], $cardDetails['expiryYear'])) {
            
            echo "Pagamento effettuato con successo.";
           
        } else {
            echo "La carta di credito è scaduta.";
        }
    }
    
    
    $user = new User(true, "user@example.com");
    $cart = [];
    
    $cardDetails = [
        'number' => '1234567890123456',
        'expiryMonth' => '07',
        'expiryYear' => '2023'
    ];
    
    processPayment($user, $cart, $cardDetails);
?>