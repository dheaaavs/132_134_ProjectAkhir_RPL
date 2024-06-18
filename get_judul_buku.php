<?php
include 'koneksi.php';

if (mysqli_connect_error()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];

    // Query untuk mengambil judul buku berdasarkan kategori
    $query = "SELECT judul_buku FROM buku WHERE kategori='$kategori'";
    $result = mysqli_query($connect, $query);

    $judul_buku_array = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $judul_buku_array[] = $row['judul_buku'];
    }
    echo json_encode($judul_buku_array);
} else {
    echo "Kategori tidak ditemukan.";
}

// Tutup koneksi database
mysqli_close($connect);
?>
