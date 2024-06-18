<?php 
include 'koneksi.php';

if ( empty($_POST['kode_anggota']) || empty($_POST['nama_anggota']) || 
empty($_POST['jenis_kelamin']) || empty($_POST['no_telp']) ) {
echo "<script>alert('Mohon isi semua field!');</script>";
echo "<script>window.history.back();</script>";
exit;
}
// Mengambil nilai dari form menggunakan $_POST
$kodeanggota = $_POST['kode_anggota'];
$namaanggota = $_POST['nama_anggota'];
$jeniskelamin = $_POST['jenis_kelamin'];
$notelp = $_POST['no_telp'];

// Perintah SQL INSERT INTO dengan kolom-kolom yang sesuai
$query = mysqli_query($connect, "INSERT INTO anggota
        (kode_anggota, nama_anggota, jenis_kelamin, no_telp) VALUES ('$kodeanggota', '$namaanggota', '$jeniskelamin', '$notelp')")
        or die(mysqli_error($connect));

// Redirect ke halaman dataanggota.php jika berhasil, atau menampilkan pesan jika gagal
if ($query) {
    header("location:dataanggota.php");
} else {
    echo "Proses input gagal";
}
?>
