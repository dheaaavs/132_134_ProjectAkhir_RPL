<?php
include 'koneksi.php';

if (mysqli_connect_error()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

if (empty($_POST['kode_anggota']) || empty($_POST['kategori']) || empty($_POST['judul_buku']) || 
    empty($_POST['tgl_pinjam']) || empty($_POST['tgl_kembali'])) {
    echo "<script>alert('Mohon isi semua field!');</script>";
    echo "<script>window.history.back();</script>";
    exit;
}

// Menambahkan data peminjaman ke database ketika formulir disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari formulir
    $kode_anggota = $_POST['kode_anggota'];
    $kategori = $_POST['kategori'];
    $judul_buku = $_POST['judul_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $status = 'Pinjam'; // Set status secara otomatis
    $tgl_aksi = date("Y-m-d"); // Ambil tanggal hari ini sebagai tanggal peminjaman

    // Query untuk mengambil ID buku berdasarkan judul buku dan kategori
    $query_id_buku = "SELECT id_buku FROM buku WHERE judul_buku='$judul_buku' AND kategori='$kategori'";
    $result_id_buku = mysqli_query($connect, $query_id_buku);

    // Query untuk mengambil ID anggota berdasarkan kode anggota
    $query_id_anggota = "SELECT id_anggota FROM anggota WHERE kode_anggota='$kode_anggota'";
    $result_id_anggota = mysqli_query($connect, $query_id_anggota);

    // Periksa apakah query untuk mengambil ID buku dan ID anggota berhasil dijalankan
    if ($result_id_buku && $result_id_anggota) {
        $row_buku = mysqli_fetch_assoc($result_id_buku);
        $row_anggota = mysqli_fetch_assoc($result_id_anggota);

        // Ambil ID buku dan ID anggota
        $id_buku = $row_buku['id_buku'];
        $id_anggota = $row_anggota['id_anggota'];

        // Query untuk memasukkan data peminjaman ke tabel peminjaman
        $insert_query_peminjaman = "INSERT INTO peminjaman (id_anggota, id_buku, tgl_pinjam, tgl_kembali, status) VALUES ('$id_anggota', '$id_buku', '$tgl_pinjam', '$tgl_kembali', '$status')";

        // Query untuk memasukkan data peminjaman ke tabel laporan
        $insert_query_laporan = "INSERT INTO laporan (tgl_aksi, id_anggota, id_buku, tgl_pinjam, tgl_kembali, status) VALUES ('$tgl_aksi', '$id_anggota', '$id_buku', '$tgl_pinjam', '$tgl_kembali', '$status')";

        // Eksekusi query
        if (mysqli_query($connect, $insert_query_peminjaman) && mysqli_query($connect, $insert_query_laporan)) {
            header("location:datatransaksi.php");
        } else {
            echo "Proses input gagal";
        }
    } else {
        echo "ID buku atau ID anggota tidak ditemukan.";
    }

    // Tutup koneksi database
    mysqli_close($connect);
}
?>
