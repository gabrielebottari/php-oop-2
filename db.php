<?php

    include __DIR__ . '/models/product.php';

    $genre = [
        'cane' => new genre('cane', 'fa-solid fa-dog'),
        'gatto' => new genre('gatto', 'fa-solid fa-cat')
    ];

    $products = [
        new food('Cibo per Cani Premium', 24.99, $genre['cane'], 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-04-27t124555.602.jpg?width=700&height=700&store=default&image-type=image','Cibo', 'fa-solid fa-utensils', 'Agnello, Piselli'),
        new toy('Palla interattiva', 9.99, $genre['cane'], 'https://www.pacopetshop.it/3500-thickbox_default/palla-5-sensi-gioco-per-cani.jpg', 'Gioco', 'fa-solid fa-gamepad', 'Gomma', 'Interattiva e resistente'),
        new kennel('Cuccia per cani Modern', 149.99, $genre['cane'], 'https://shop-cdn-m.mediazs.com/bilder/4/400/112108_pla_modern_living_hundeh_tte_palma_fg_1296_4.jpg', 'Cuccia', 'fa-solid fa-house', 'Legno, PVC', '66x81x88cm'),
        new food('Bocconcini in Gelatina', 13.49, $genre['gatto'], 'https://shop-cdn-m.mediazs.com/bilder/6/400/28346_pla_catessy_gravy_duck_400g_6.jpg', 'Cibo', 'fa-solid fa-utensils', 'Anatra, Fegato'),
        new toy('Tiragraffi per Gatti',71.99, $genre['gatto'], 'https://shop-cdn-m.mediazs.com/bilder/5/400/115905_pla_modern_living_kb_amora_fg_4024_5.jpg', 'Gioco', 'fa-solid fa-house', 'Sisal', '60x40x112cm'),
        new kennel('Cuccia per Gatti Comoda', 49.99, $genre['gatto'], 'https://shop-cdn-m.mediazs.com/bilder/2/400/24722_PLA_Katzenhaus_Pueblo_Mix4_809_17_2.jpg', 'Cuccia', 'fa-solid fa-house', 'Vimini Intrecciato', '56x36x42cm'),
    ];

    /*
    foreach ($products as $product) {
        echo "Nome: " . $product->name . "<br>";
        echo "Prezzo: €" . $product->price . "<br>";
        echo "Categoria: " . $product->genre->name . "<br>";
        echo "Immagine: <img src='" . $product->image . "' alt='" . $product->name . "'><br><br>";
    }
    */

?>