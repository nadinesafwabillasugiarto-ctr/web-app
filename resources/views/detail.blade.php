<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2>Detail Produk</h2>
            <p class="fs-5">Harga produk yang dipilih adalah: <span class="badge bg-success">Rp {{ $harga }}</span></p>
            <a href="/product" class="btn btn-primary mt-3">Kembali ke Produk</a>
        </div>
    </div>
</body>
</html>