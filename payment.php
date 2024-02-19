<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Pagamento</h2>
        <form action="process-payment.php" method="post">
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
            <button type="submit" class="btn btn-primary">Effettua Pagamento</button>
        </form>
    </div>
</body>
</html>