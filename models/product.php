<?php

    include __DIR__ . '/food.php';
    include __DIR__ . '/genre.php';
    include __DIR__ . '/kennel.php';
    include __DIR__ . '/toy.php';

    class product{
        public $name;
        public $price;
        public $genre;
        public $image; 

        public function __construct($name, $price, $genre, $image)
        {
            $this->name = $name;
            $this->price = $price;
            $this->genre = $genre;
            $this->image = $image;
        }
    }

?>