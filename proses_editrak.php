<?php 
    include 'koneksi.php';

    if (empty($_POST['nama_rak'])) {
        echo "<script>alert('Mohon isi semua field!');</script>";
        echo "<script>window.history.back();</script>";
        exit;
    }
    
    $id_rak = $_POST['id_rak'];
    $namarak = $_POST['nama_rak'];

    $query = mysqli_query($connect,"UPDATE rak SET nama_rak='$namarak' WHERE id_rak='$id_rak'") 
             or die(mysqli_error($connect));
    if ($query) { 
        header('Location: datarak.php');
        exit;
    } else {
        header('Location: editrak.php?id_rak='. $id_rak);
        exit;
    } 
?>