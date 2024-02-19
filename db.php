<?php

    include __DIR__ . '/models/product.php';

    $cane = new genre('Cane');
    $gatto = new genre('Gatto');

    $products = [
        new food('Cibo per Cani Premium', 24.99, $cane, 'url_immagine_cibo_cane.jpg', 'Pollo, Riso'),
        new toy('Palla interattiva', 9.99, $cane, 'url_immagine_palla.jpg', 'Gomma', 'Interattiva e resistente'),
        new kennel('Cuccia per Gatti Comoda', 49.99, $gatto, 'url_immagine_cuccia_gatto.jpg', 'Tessuto', '60x40x40cm'),
    ];

    foreach ($products as $product) {
        echo "Nome: " . $product->name . "<br>";
        echo "Prezzo: €" . $product->price . "<br>";
        echo "Categoria: " . $product->genre->name . "<br>";
        echo "Immagine: <img src='" . $product->image . "' alt='" . $product->name . "'><br><br>";
    }

?>