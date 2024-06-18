<?php 
    include 'koneksi.php';

    if (empty($_POST['kode_buku']) || empty($_POST['judul_buku']) || empty($_POST['kategori']) || 
    empty($_POST['pengarang']) || empty($_POST['penerbit']) || empty($_POST['thn_terbit']) || 
    empty($_POST['stok']) || empty($_POST['sinopsis']) || empty($_POST['id_rak'])) {
    echo "<script>alert('Mohon isi semua field!');</script>";
    echo "<script>window.history.back();</script>";
    exit;
}

    $id_buku = $_POST['id_buku'];
    $kodebuku = $_POST['kode_buku'];
    $judulbuku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thnterbit = $_POST['thn_terbit'];
    $stok = $_POST['stok'];
    $sinopsis = $_POST['sinopsis'];
    $rak = $_POST['id_rak'];
    

    $query = mysqli_query($connect,"UPDATE buku SET kode_buku='$kodebuku',
             judul_buku='$judulbuku', kategori='$kategori', pengarang='$pengarang',penerbit='$penerbit', thn_terbit='$thnterbit', stok='$stok', sinopsis='$sinopsis',id_rak='$rak' WHERE id_buku='$id_buku'") 
             or die(mysqli_error($connect));
    if ($query) { 
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE BERHASIL</h1>
            <a href="databuku.php">
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
                ">Data Buku</button>
            </a>
        </center>
                
<?php 
    } else {
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE GAGAL</h1>
                <a href="databuku.php">
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
                ">Data Buku</button>
                </a>
        </center>
<?php 
    } 
?>