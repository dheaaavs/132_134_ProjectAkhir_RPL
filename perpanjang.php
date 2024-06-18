<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpanjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <?php 
        include 'koneksi.php';
        $idpeminjaman = $_GET['id_peminjaman'];
        $query = mysqli_query($connect, "SELECT peminjaman.*, buku.judul_buku, anggota.kode_anggota, anggota.nama_anggota 
        FROM peminjaman 
        INNER JOIN buku ON peminjaman.id_buku = buku.id_buku 
        INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota WHERE id_peminjaman='$idpeminjaman'");
        $data = mysqli_fetch_array($query);
    ?>

<?php
include 'koneksi.php';

if(isset($_GET['id_buku'])) {
    $idbuku = $_GET['id_buku'];

    // Ambil stok buku dari database
    $query = "SELECT stok FROM buku WHERE id_buku = $idbuku";
    $result = mysqli_query($connect, $query);
    if($result) {
        $row = mysqli_fetch_assoc($result);
        $stok = $row['stok'];

        // Periksa apakah stok cukup untuk dipinjam
        if($stok > 0) {
            // Kurangi stok buku
            $stok -= 1;

            // Update stok buku dalam database
            $update_query = "UPDATE buku SET stok = $stok WHERE id_buku = $idbuku";
            mysqli_query($connect, $update_query);
        } else {
            // Jika stok tidak cukup, tampilkan pesan kesalahan
            echo "Stok buku tidak cukup untuk dipinjam.";
        }
    } else {
        echo "Error retrieving book data.";
    }
} else {
    echo " ";
}

?>

    <center>
        <h1 class="text-secondary mb-4">Update Data Peminjaman</h1>
        <form action="proses_perpanjang.php" method="POST" >
        <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Edit Data Peminjaman</th>
        <td></td>
        <td><img src="ions.png" alt="logo" style="width: 200px;  height: auto"></td>
        </tr>
        <input type="hidden" name="id_peminjaman" value="<?php echo $data['id_peminjaman']; ?>">
        <tr>
        <th>Tanggal Pengembalian</th>
        <td><input type="date" class="form-control" id="birthdaytime" name="tgl_kembali" value="<?php echo $data['tgl_kembali']; ?>"></td>
        </tr> 
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    <br>
    </center>
</body>
</html>