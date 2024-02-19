<?php
    include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <title>PHP-OOP-02</title>
    </head>
    <body>

    <main class="bg-primary-subtle">
    <div class="container py-4">

        <h1 class="text-center">Animal Shop<i class="fa-solid fa-otter"></i></h1>

        <?php
        // Raggruppa i prodotti per categoria
        $productsByGenre = [];
        foreach ($products as $product) {
            $productsByGenre[$product->genre->name][] = $product;
        }

        // Itera su ciascuna categoria e stampa le card dei prodotti
        foreach ($productsByGenre as $genreName => $products) {
            echo "<h2 class='mt-4'>" . htmlspecialchars($genreName) . " <i class='" . htmlspecialchars($products[0]->genre->icon) . "'></i></h2>";
            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
            foreach ($products as $product) {
                echo '
                    <div class="col">
                        <div class="card h-100">
                            <img src="' . htmlspecialchars($product->image) . '" class="card-img-top" alt="' . htmlspecialchars($product->name) . '" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($product->name) . '</h5>
                                <p class="card-text">Prezzo: €' . htmlspecialchars($product->price) . '</p>
                                <p class="card-text">
                                    <i class="' . htmlspecialchars($product->genre->icon) . '"></i> ' . htmlspecialchars($product->genre->name) . '
                                </p>
                                <p class="card-text">
                                    <i class="' . htmlspecialchars($product->typeIcon) . '"></i>
                                    ' . htmlspecialchars($product->type) . '
                                </p>
                            </div>
                        </div>
                    </div>
                ';
            }
            echo '</div>';
        }
        ?>
    </div>
</main>



        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>