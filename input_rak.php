<?php 
include 'koneksi.php';

if (empty($_POST['nama_rak'])) {
    echo "<script>alert('Mohon isi semua field!');</script>";
    echo "<script>window.history.back();</script>";
    exit;
}
// Mengambil nilai dari form menggunakan $_POST
$namarak = $_POST['nama_rak'];

// Perintah SQL INSERT INTO dengan kolom-kolom yang sesuai
$query = mysqli_query($connect, "INSERT INTO rak
        (nama_rak) VALUES ('$namarak')")
        or die(mysqli_error($connect));

// Redirect ke halaman datarak.php jika berhasil, atau menampilkan pesan jika gagal
if ($query) {
    header("location:datarak.php");
} else {
    echo "Proses input gagal";
}
?>
