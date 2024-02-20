<?php

    //include __DIR__ . '/food.php';
    //include __DIR__ . '/genre.php';
    //include __DIR__ . '/kennel.php';
    //include __DIR__ . '/toy.php';
    //include __DIR__ . '/discountable.php';
    //include __DIR__ . '/exceptions.php';

    class Product{
        public $name;
        public $price;
        public $genre;
        public $image;
        public $type;
        public $typeIcon;

        public function __construct($name, $price, $genre, $image, $type, $typeIcon)
        {
            $this->name = $name;
            $this->price = $price;
            $this->genre = $genre;
            $this->image = $image;
            $this->type = $type;
            $this->typeIcon = $typeIcon;
        }

    }

?>