<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Luas Segitiga Interaktif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 500px; margin: auto;">
            <h3 class="mb-3 text-success">Kalkulator Luas Segitiga</h3>
            
            <!-- Form Input -->
            <form action="/kalkulator/segitiga" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="alas" class="form-label">Masukkan Alas (cm):</label>
                    <input type="number" step="any" name="alas" id="alas" class="form-control" value="{{ $alas ?? '' }}" required>
                </div>

                <div class="mb-3">
                    <label for="tinggi" class="form-label">Masukkan Tinggi (cm):</label>
                    <input type="number" step="any" name="tinggi" id="tinggi" class="form-control" value="{{ $tinggi ?? '' }}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Hitung Luas</button>
            </form>

            <!-- Hasil Perhitungan (Hanya muncul jika sudah dihitung) -->
            @isset($luas)
                <div class="alert alert-info mt-4">
                    <h5 class="mb-0">Luas Segitiga: <b>{{ $luas }} cm²</b></h5>
                </div>
            @endisset
        </div>
    </div>
</body>
</html>