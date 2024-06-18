<?php 
    include 'koneksi.php';

    if (empty($_POST['id_anggota']) || empty($_POST['kode_anggota']) || empty($_POST['nama_anggota']) || 
    empty($_POST['jenis_kelamin']) || empty($_POST['no_telp']) ) {
    echo "<script>alert('Mohon isi semua field!');</script>";
    echo "<script>window.history.back();</script>";
    exit;
}

    $id_anggota = $_POST['id_anggota'];
    $kodeanggota = $_POST['kode_anggota'];
    $namaanggota = $_POST['nama_anggota'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $notelp = $_POST['no_telp'];

    $query = mysqli_query($connect,"UPDATE anggota SET kode_anggota='$kodeanggota',
             nama_anggota='$namaanggota', jenis_kelamin='$jeniskelamin', no_telp='$notelp' WHERE id_anggota='$id_anggota'") 
             or die(mysqli_error($connect));
    if ($query) { 
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE BERHASIL</h1>
            <a href="dataanggota.php">
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
                ">Data Anggota</button>
            </a>
        </center>
                
<?php 
    } else {
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES UPDATE GAGAL</h1>
                <a href="dataanggota.php">
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
                ">Data Anggota</button>
                </a>
        </center>
<?php 
    } 
?>