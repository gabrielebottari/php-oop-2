<?php

    include_once __DIR__ . '/product.php';

    class toy extends product{
        public $material;
        public $characteristics;

        public function __construct($name, $price, $genre, $image, $type, $typeIcon, $material, $characteristics)
        {
            $this->material = $material;
            $this->characteristics = $characteristics;
            parent::__construct($name, $price, $genre, $image, $type, $typeIcon);
        }
    }

?>