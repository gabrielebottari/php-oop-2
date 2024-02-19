<?php

    include_once __DIR__ . '/product.php';

    class food extends product{
        public $ingredients;

        public function __construct($name, $price, $genre, $image, $ingredients)
        {
            $this->ingredients = $ingredients;
            parent::__construct($name, $price, $genre, $image);
        }
    }

?>