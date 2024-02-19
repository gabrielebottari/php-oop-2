<?php

    include_once __DIR__ . '/product.php';

    class kennel extends product{
        public $material;
        public $dimension;

        public function __construct($name, $price, $genre, $image, $material, $dimension)
        {
            $this->material = $material;
            $this->dimension = $dimension;
            parent::__construct($name, $price, $genre, $image);
        }
    }

?>