<?php 
include 'koneksi.php';

// Pastikan $_GET['id_peminjaman'] tersedia
if(isset($_GET['id_peminjaman'])) {
    $idpeminjaman = $_GET['id_peminjaman'];
    $status = 'Kembali'; // Set status secara otomatis
    $tgl_aksi = date("Y-m-d"); // Ambil tanggal hari ini sebagai tanggal pengembalian

    // Ambil data peminjaman yang akan ditambahkan ke laporan
    $select_query = mysqli_query($connect, "SELECT id_anggota, id_buku, tgl_pinjam, tgl_kembali FROM peminjaman WHERE id_peminjaman = '$idpeminjaman'");
    $row = mysqli_fetch_assoc($select_query);
    $id_anggota = $row['id_anggota'];
    $id_buku = $row['id_buku'];
    $tgl_pinjam = $row['tgl_pinjam'];
    $tgl_kembali = $row['tgl_kembali'];

    // Tambahkan data peminjaman ke laporan bersama dengan tanggal_aksi
    $insert_query = mysqli_query($connect, "INSERT INTO laporan (tgl_aksi, id_anggota, id_buku, tgl_pinjam, tgl_kembali, status) VALUES ('$tgl_aksi', '$id_anggota', '$id_buku', '$tgl_pinjam', '$tgl_kembali', '$status')");
    
    // Periksa apakah query penambahan ke laporan berhasil dijalankan
    if ($insert_query) {
        // Hapus data peminjaman dengan id_peminjaman tertentu
        $query_child = mysqli_query($connect, "DELETE FROM peminjaman WHERE id_peminjaman = '$idpeminjaman'");
        
        // Periksa apakah query untuk menghapus data berhasil dijalankan
        if($query_child) {
            header("location:datatransaksi.php");
        } else {
            echo "Proses penghapusan data peminjaman gagal";
        }
    } else {
        echo "Proses penambahan ke laporan gagal";
    }
} else {
    echo "ID peminjaman tidak tersedia";
}
?>
