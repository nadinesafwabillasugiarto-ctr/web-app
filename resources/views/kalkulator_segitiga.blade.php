<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Luas Segitiga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 500px; margin: auto;">
            <h3 class="mb-3 text-success">Perhitungan Luas Segitiga</h3>
            <ul class="list-group mb-3">
                <li class="list-group-item"><b>Alas:</b> {{ $alas }} cm</li>
                <li class="list-group-item"><b>Tinggi:</b> {{ $tinggi }} cm</li>
            </ul>
            <div class="alert alert-info">
                <h4>Luas Segitiga: <b>{{ $luas }} cm²</b></h4>
            </div>
        </div>
    </div>
</body>
</html>