<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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

    <div id="layoutSidenav_content">
        <button id="sidebarToggleBtn" class="btn btn-dark active" style="margin-top: 50px;">
            <i class="fas fa-bars"></i>
        </button>

        <div class="sidebar">
            <ul>
                <li type="button"><a href="dashboard.php" style="text-decoration: none; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16"><path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/><path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/></svg> Dashboard</a></li>
                <li type="button"><a href="dataanggota.php" style="text-decoration: none; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/></svg> Data Anggota</a></li>
                <li type="button"><a href="databuku.php" style="text-decoration: none; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/></svg> Data buku</a></li>
                <li type="button"><a href="datarak.php" style="text-decoration: none; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookshelf" viewBox="0 0 16 16"><path d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5M3 14h10v-3H3zm0-4h10V7H3zm0-4h10V3H3z"/></svg> Rak buku</a></li>
                <li type="button"><a href="datatransaksi.php" style="text-decoration: none; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16"><path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2"/><path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/></svg> Transaksi</a></li>
                <li type="button"><a href="datalaporan.php" style="text-decoration: none; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
</svg> Laporan</a></li>
            </ul>
        </div>
          
        <main>
            <div class="container-fluid" style="margin-top:-50px;">
            <marquee>Selamat Datang di Halaman Utama IONs Library</marquee>
                <h1 class="mt-4"></h1>
                <div class="card mb-4">
                    <h2 class="text-center" style="margin-top: 10px;">SISTEM INFORMASI PERPUSTAKAAN IONS</h2>
                    <hr />
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-red set-icon">
                                    <i class="fa fa-users"></i>
                                </span>
                                <div class="text-box">
                                    <b>
                                        <?php
                                        include 'koneksi.php';
                                        $agt = mysqli_query($connect, "SELECT * FROM anggota");
                                        $jmlh_anggota = mysqli_num_rows($agt);
                                        echo "<p style='font-size: 20px;'>$jmlh_anggota Anggota</p>";
                                        ?>
                                    </b>
                                    <a href="dataanggota.php">
                                        <p class="text-muted">Lihat Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-blue set-icon">
                                    <i class="fa fa-book"></i>
                                </span>
                                <div class="text-box">
                                    <b>
                                        <?php
                                        $buku = mysqli_query($connect, "SELECT * FROM buku");
                                        $jmlh_buku = mysqli_num_rows($buku);
                                        echo "<p style='font-size: 20px;'>$jmlh_buku Buku</p>";
                                        ?>
                                    </b>
                                    <a href="databuku.php">
                                        <p class="text-muted">Lihat Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-green set-icon">
                                 <ion-icon name="file-tray-stacked"></ion-icon>
                                </span>
                                <div class="text-box">
                                    <b>
                                        <?php
                                        $rak = mysqli_query($connect, "SELECT * FROM rak");
                                        $jmlh_rak = mysqli_num_rows($rak);
                                        echo "<p style='font-size: 20px;'>$jmlh_rak Rak Buku</p>";
                                        ?>
                                    </b>
                                    <a href="datarak.php">
                                        <p class="text-muted">Lihat Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-5">
        <div class="panel panel-custom">
            <div class="panel-heading" style="text-align: center;">
                IONs Library
            </div>
            <div class="panel-body" style="position: relative;">
                <p class="panel-text">Selamat datang di IONs Library <br>
                    Sebuah perpustakaan digital yang memberikan kemudahan dalam mengelola data perpustakaan IONs Education</p>
                <div class="panel-footer" style="text-align: center;">
                    Introduction
                </div>
                </div>
                </div>
                </div>
                
               <!-- Notifikasi Anggota Terlambat -->
               <div class="col-md-5 col-sm-5">
                 <div class="panel panel-custom">
               <div class="notifikasi-terlambat" style="position: relative;">
                    <?php
                    include 'koneksi.php';
                    date_default_timezone_set('Asia/Jakarta');
                    $today = date("Y-m-d");
                    $query = "SELECT peminjaman.*, anggota.nama_anggota FROM peminjaman JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota WHERE peminjaman.tgl_kembali < '$today'";
                    $result = mysqli_query($connect, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nama = $row['nama_anggota'];
                        $tanggal_kembali = $row['tgl_kembali'];
                        $hari_terlambat = abs(strtotime($today) - strtotime($tanggal_kembali)) / (60 * 60 * 24);
                        echo "<p>$nama telah terlambat mengembalikan buku selama $hari_terlambat hari.</p>";
                    }
                    ?>
                </div>  
                </div>
                </div>  
        </main>
    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
