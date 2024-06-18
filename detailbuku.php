<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        th {
            text-align: right;
        }

        td {
            text-align: left;
        }

        .book-image {
            width: 550px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="mt-5">Detail Buku</h1>
            </div>
        </div>
        <?php
        include 'koneksi.php';
        $judulbuku = $_GET['judul_buku'];
        $query = mysqli_query($connect, "SELECT buku.*, rak.nama_rak FROM buku INNER JOIN rak ON buku.id_rak = rak.id_rak WHERE buku.judul_buku='$judulbuku'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="buku3.jpg" alt="buku" class="book-image">
            </div>
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Kode Buku</th>
                            <td><?php echo $data['kode_buku'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Judul Buku</th>
                            <td><?php echo $data['judul_buku'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Kategori</th>
                            <td><?php echo $data['kategori'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pengarang</th>
                            <td><?php echo $data['pengarang'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Penerbit</th>
                            <td><?php echo $data['penerbit'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Terbit</th>
                            <td><?php echo $data['thn_terbit'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Stok</th>
                            <td><?php echo $data['stok'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Sinopsis</th>
                            <td><?php echo $data['sinopsis'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lokasi Rak</th>
                            <td><?php echo $data['nama_rak'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
