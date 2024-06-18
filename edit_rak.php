<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Lokasi Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <?php 
        include 'koneksi.php';
        $idrak = $_GET['id_rak'];
        $query = mysqli_query($connect, "SELECT * FROM rak
                WHERE id_rak='$idrak'");
        $data = mysqli_fetch_array($query);
   ?>

    <center>
        <h1 class="text-secondary mb-4">Update Data Rak</h1>

        <form action="proses_editrak.php" method="POST" >
        <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Edit Data Rak</th>
        <td></td>
        <td><img src="ions.png" alt="logo" style="width: 200px;  height: auto"></td>
        </tr>
        <input type="hidden" name="id_rak" value="<?php echo $data['id_rak'];?>">
        <tr>
            <th>Nama Rak</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Rak" aria-label="First name" name="nama_rak" value="<?php echo htmlspecialchars($data['nama_rak']);?>"></td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    <br>
    </center>
</body>
</html>