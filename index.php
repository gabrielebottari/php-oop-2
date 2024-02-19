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

            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><h1 class="fs-3 text-white">Animal Shop<i class="fa-solid fa-otter"></i></h1></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link  text-white" href="http://localhost/Classe114/php-oop-2/login.php"><i class="fa-solid fa-user"></i> Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://localhost/Classe114/php-oop-2/cart.php"><i class="fas fa-shopping-cart"></i> Carrello</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php
            
            $productsByGenre = [];
            foreach ($products as $product) {
                $productsByGenre[$product->genre->name][] = $product;
            }

            foreach ($productsByGenre as $genreName => $products) {
                echo "<h2 class='mt-4 text-primary ps-5 ms-5'>" . htmlspecialchars($genreName) . " <i class='" . htmlspecialchars($products[0]->genre->icon) . "'></i></h2>";
                echo '<div class="row row-cols-1 row-cols-md-4 g-5 justify-content-center">';
                foreach ($products as $product) {
                    echo '
                        <div class="col">
                            <div class="card py-3">
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
                                    <form action="http://localhost/Classe114/php-oop-2/add-to-cart.php" method="post">
                                        <input type="hidden" name="productName" value="' . htmlspecialchars($product->name) . '">
                                        <input type="hidden" name="productPrice" value="' . htmlspecialchars($product->price) . '">
                                        <button type="submit" class="btn btn-primary">Aggiungi al Carrello <i class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
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