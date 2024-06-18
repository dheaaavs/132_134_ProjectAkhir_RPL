<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
    <link rel="stylesheet" href="bentuk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
        const sidebar = document.querySelector('.sidebar');
        const containerFluid = document.querySelector('.container-fluid');
        
        sidebarToggleBtn.classList.add('active');
        sidebar.classList.add('active');
        containerFluid.classList.add('active');

        sidebarToggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            this.classList.toggle('active');
            containerFluid.classList.toggle('active');
        });
    });
    
</script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="padding-bottom: 15px; font-family:baufra;">
        <div class="navbar-left">
        <h1 class="nav1" style="font-size: 17px;"><img src="ions.png" alt="logo ions" style="width: 60px; height: auto; margin-right: 5px;"> PERPUSTAKAAN IONS</h1>
        </div>
        <div class="navbar-center">
            <div class="date">
                <?php echo "Tanggal hari ini : " . date("d-m-Y"); ?>
            </div>
        </div>
        <div class="navbar-right">
            <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
        </div>
    </nav>

    <div class="container-fluid">
        <center>
            <h1 style="margin-top:50px;">Data Buku</h1>

            <table class="table table-bordered center">
                <thead align=center>
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Stok</th>
                        <th>Nama Rak</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include 'koneksi.php'; // Sertakan file koneksi.php

                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    // Ubah kueri SQL untuk mencari judul_buku yang mengandung teks pencarian
                    $query = "SELECT b.*, r.nama_rak, COUNT(p.id_peminjaman) AS total_dipinjam 
                              FROM buku b
                              LEFT JOIN peminjaman p ON b.id_buku = p.id_buku
                              LEFT JOIN rak r ON b.id_rak = r.id_rak
                              WHERE b.judul_buku LIKE '%$cari%'
                              GROUP BY b.id_buku";
                } else {
                    // Jika tidak ada pencarian, tampilkan semua data buku
                    $query = "SELECT b.*, r.nama_rak, COUNT(p.id_peminjaman) AS total_dipinjam 
                              FROM buku b
                              LEFT JOIN peminjaman p ON b.id_buku = p.id_buku
                              LEFT JOIN rak r ON b.id_rak = r.id_rak
                              GROUP BY b.id_buku";
                }

                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_array($result)) {
                        // Hitung stok aktual
                        $stok_aktual = $data['stok'] - $data['total_dipinjam'];
                        // Tampilkan data buku
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $data['kode_buku'] . "</td>";
                        echo "<td><a href='detailbuku.php?judul_buku=" . urlencode($data['judul_buku']) . "'>" . $data['judul_buku'] . "</a></td>";
                        echo "<td>" . $data['kategori'] . "</td>";
                        echo "<td>" . $data['pengarang'] . "</td>";
                        echo "<td>" . $data['penerbit'] . "</td>";
                        echo "<td>" . $data['thn_terbit'] . "</td>";
                        echo "<td>" . $stok_aktual . "</td>";
                        echo "<td>" . $data['nama_rak'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>Data buku tidak ditemukan.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
