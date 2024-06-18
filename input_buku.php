<?php
include 'koneksi.php';

// Cek apakah ada data yang tidak terisi
if (empty($_POST['kode_buku']) || empty($_POST['judul_buku']) || empty($_POST['kategori']) || 
    empty($_POST['pengarang']) || empty($_POST['penerbit']) || empty($_POST['thn_terbit']) || 
    empty($_POST['stok']) || empty($_POST['sinopsis']) || empty($_POST['id_rak'])) {
    echo "<script>alert('Mohon isi semua field!');</script>";
    echo "<script>window.history.back();</script>";
    exit;
}

$kodebuku = $_POST['kode_buku'];
$judulbuku = $_POST['judul_buku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$thnterbit = $_POST['thn_terbit'];
$stok = $_POST['stok'];
$sinopsis = $_POST['sinopsis'];
$rak = $_POST['id_rak'];

// Perintah SQL INSERT INTO dengan kolom-kolom yang sesuai
$query = mysqli_query($connect, "INSERT INTO buku (kode_buku, judul_buku, kategori, pengarang, penerbit, thn_terbit, stok, sinopsis, id_rak) VALUES ('$kodebuku', '$judulbuku', '$kategori', '$pengarang', '$penerbit', '$thnterbit', '$stok', '$sinopsis', '$rak')") or die(mysqli_error($connect));

// Redirect ke halaman databuku.php jika berhasil, atau menampilkan pesan jika gagal
if ($query) {
    header("location:databuku.php");
} else {
    echo "Proses input gagal";
}
?>