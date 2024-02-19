<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  class="bg-primary-subtle">
    <div class="container mt-4">
        <h2 class="text-primary text-center">Pagamento</h2>
        <div class="container d-flex justify-content-center">
        <form action="process-payment.php" method="post" class="w-75">
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Numero di Carta</label>
                <input type="text" class="form-control" id="cardNumber">
            </div>
            <div class="mb-3">
                <label for="expiryMonth" class="form-label">Mese di Scadenza</label>
                <input type="number" class="form-control" id="expiryMonth" name="expiryMonth" min="1" max="12" required>
            </div>
            <div class="mb-3">
                <label for="expiryYear" class="form-label">Anno di Scadenza</label>
                <input type="number" class="form-control" id="expiryYear" name="expiryYear" required>
            </div>
            <button type="submit" class="btn btn-primary">Effettua Pagamento <i class="fa-solid fa-right-to-bracket text-white"></i></button>
        </form>
        </div>
    </div>
</body>
</html>