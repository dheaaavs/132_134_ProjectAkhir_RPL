<?php 
    include 'koneksi.php';

    $idrak = $_GET['id_rak'];

    $query_child =mysqli_query ($connect,"DELETE FROM rak WHERE id_rak = '$idrak'");
if( $query_child){
    $query=mysqli_query($connect, "DELETE FROM rak WHERE id_rak='$idrak'");
    if ($query) { 
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES DELETE BERHASIL</h1>
            <a href="datarak.php">
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
                ">Daftar Rak</button>
            </a>
        </center>
                        
<?php 
    } else {
?>
        <center>
            <h1 style="margin-top: 17rem;">PROSES DELETE GAGAL</h1>
            <a href="datarak.php">
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
                ">Daftar Rak</button>
            </a>
        </center>
<?php 
    } 
}else{
    echo "Gagal menghapus data dari tabel anak";
}
?>