<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Rak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
            height: 100vh; /* Mengatur tinggi container menjadi 100% dari viewport */
            display: flex;
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
        }
        .image-container {
            text-align: center; /* Pusatkan gambar secara horizontal */
        }
        .image-container img {
            width: 500px;
            height: auto;
        }
        .form-container {
            padding: 0 20px; /* Berikan padding agar formulir tidak terlalu dekat dengan tepi */
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Daftar Rak</a>
    </div>
</nav>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 form-container">
            <form action="input_rak.php" method="POST">
                <h2 class="mb-4">Daftar Rak Baru</h2>
                <div class="mb-3">
                    <label for="nama_rak" class="form-label">Nama Rak</label>
                    <input type="text" class="form-control" id="nama_rak" placeholder="Masukkan Nama Rak" name="nama_rak">
                </div>
                <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6 image-container">
            <img src="rakbuku2.jpg" alt="logo">
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
