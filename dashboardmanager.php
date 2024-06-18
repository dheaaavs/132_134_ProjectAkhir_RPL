<?php
include 'koneksi.php';

$no = 1;
if(isset($_POST['search'])){
    $awal = mysqli_escape_string($connect, $_POST['tgl_awal']);
    $akhir = mysqli_escape_string($connect, $_POST['tgl_akhir']);
    $query = "SELECT laporan.*, buku.judul_buku, anggota.kode_anggota, anggota.nama_anggota 
              FROM laporan 
              INNER JOIN buku ON laporan.id_buku = buku.id_buku 
              INNER JOIN anggota ON laporan.id_anggota = anggota.id_anggota 
              WHERE tgl_aksi BETWEEN '$awal' AND '$akhir'";
    $semuadata = mysqli_query($connect, $query);
} else {
    $query = "SELECT laporan.*, buku.judul_buku, anggota.kode_anggota, anggota.nama_anggota 
              FROM laporan 
              INNER JOIN buku ON laporan.id_buku = buku.id_buku 
              INNER JOIN anggota ON laporan.id_anggota = anggota.id_anggota";
    $semuadata = mysqli_query($connect, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Laporan</title>
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

        <div class="container-fluid ">
        <center>
        <h1 style="margin-top:50px;">Data Laporan</h1>

        <form action="dashboardmanager.php" method="post" class="d-flex mt-3 col-3" role="search">
        <div class="input-group">
            <span class="input-group-text">Dari</span>
            <input type="date" class="form-control me-1" name="tgl_awal">
        </div>
        <div class="input-group">
            <span class="input-group-text">Hingga</span>
            <input type="date" class="form-control me-1" name="tgl_akhir">
        </div>
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
        </form>
        <br>
        <table class="table table-bordered center">
        <thead align=center>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul Buku</th>
                <th>Kode Anggota</th>
                <th>Nama Anggota</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Terlambat</th>
            </tr>
        </thead>
        <?php
if(mysqli_num_rows($semuadata) > 0) {
    while($data = mysqli_fetch_array($semuadata)) {
?>

        <tbody>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['tgl_aksi'] ?></td>
                <td><?php echo $data['judul_buku'] ?></td>
                <td><?php echo $data['kode_anggota'] ?></td>
                <td><?php echo $data['nama_anggota'] ?></td>
                <td><?php echo $data['tgl_pinjam'] ?></td>
                <td><?php echo $data['tgl_kembali'] ?></td>
                <td><?php echo $data['status'] ?></td>
                <td>
                    <?php 
                        if($data['status'] == 'Pinjam') {
                            echo " ";
                        } else {
                            // Hitung selisih tanggal antara tanggal hari ini dan tanggal kembali
                            $tgl_kembali = strtotime($data['tgl_kembali']);
                            $tgl_sekarang = strtotime(date("Y-m-d"));
                            $selisih = $tgl_sekarang - $tgl_kembali;
                            $hari_terlambat = floor($selisih / (60 * 60 * 24));
                            $laporan_id = $data['id_laporan']; // Gantikan laporan_id dengan nama kolom id yang sesuai
                            $update_query = "UPDATE laporan SET hari_terlambat = '$hari_terlambat' WHERE id_laporan = '$laporan_id'";
                            mysqli_query($connect, $update_query);
                            $denda = ($hari_terlambat > 0) ? $hari_terlambat * 5000 : 0 ; // Hitung denda
                            echo ($hari_terlambat > 0) ? $hari_terlambat : 0 ; // Tampilkan jumlah hari terlambat
                            echo " hari x Rp 5.000 = Rp " . number_format($denda); // Tampilkan jumlah denda
                        }
                    ?>
                </td>


            </tr>
        </tbody>
        <?php 
        }
    } else {
    echo "Data anggota tidak ditemukan.";
    }
    ?>
    </table>
    </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
