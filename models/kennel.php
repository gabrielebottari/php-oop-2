<?php

    include_once __DIR__ . '/product.php';

    class kennel extends product{
        public $material;
        public $dimensions;

        public function __construct($name, $price, $genre, $image, $type, $typeIcon, $material, $dimensions)
        {
            $this->material = $material;
            $this->dimensions = $dimensions;
            parent::__construct($name, $price, $genre, $image, $type, $typeIcon);
        }
    }

?>