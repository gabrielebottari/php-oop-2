<?php

    include_once __DIR__ . '/product.php';
    require_once __DIR__ . '/ProductUtilities.php';
    require_once __DIR__ . '/ProductException.php';

    class Food extends Product{

        use ProductUtilities;

        public $ingredients;

        public function __construct($name, $price, $genre, $image, $type, $typeIcon, $ingredients)
        {
            $this->ingredients = $ingredients;
            parent::__construct($name, $price, $genre, $image, $type, $typeIcon);
        }

        protected $stock = 0;

        public function purchase($quantity) {
            if ($this->stock < $quantity) {
                throw new ProductException("Prodotto non disponibile in quantità sufficiente.");
            }
            // Logica per ridurre lo stock
            $this->stock -= $quantity;
        }
    }

?>