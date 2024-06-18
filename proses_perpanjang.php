<?php 
    include 'koneksi.php';

    if (empty($_POST['tgl_kembali'])) {
    echo "<script>alert('Mohon isi semua field!');</script>";
    echo "<script>window.history.back();</script>";
    exit;
}

    $idpeminjaman = $_POST['id_peminjaman'];
    $tglkembali = $_POST['tgl_kembali'];

    $query = mysqli_query($connect,"UPDATE peminjaman SET tgl_kembali='$tglkembali' WHERE id_peminjaman='$idpeminjaman'") 
             or die(mysqli_error($connect));
    if ($query) { 
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE BERHASIL</h1>
            <a href="datatransaksi.php">
                <button style="
                    border: none;
                    border-radius: 3px;
                    border-color: none;
                    background-color: rgb(79, 77, 77);
                    color: white;
                    padding-right: 2rem;
                    padding-left: 2rem;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    font-size: 1rem;
                ">Data Transaksi</button>
            </a>
        </center>
                
<?php 
    } else {
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE GAGAL</h1>
                <a href="datatransaksi.php">
                    <button style="
                    border: none;
                    border-radius: 3px;
                    border-color: none;
                    background-color: rgb(79, 77, 77);
                    color: white;
                    padding-right: 2rem;
                    padding-left: 2rem;
                    padding-top: 1rem;
                    padding-bottom: 1rem;
                    font-size: 1rem;
                ">Data Transaksi</button>
                </a>
        </center>
<?php 
    } 
?>