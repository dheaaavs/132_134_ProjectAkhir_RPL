<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <?php 
        include 'koneksi.php';
        $idanggota = $_GET['id_anggota'];
        $query = mysqli_query($connect, "SELECT * FROM anggota
                WHERE id_anggota='$idanggota'");
        $data = mysqli_fetch_array($query);
    ?>

    <center>
        <h1 class="text-secondary mb-4">Update Data Anggota</h1>

        <form action="proses_editanggota.php" method="POST" >
        <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Edit Data Anggota</th>
        <td></td>
        <td><img src="ions.png" alt="logo" style="width: 200px;  height: auto"></td>
        </tr>
        <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
        <tr>
            <th>Kode Anggota</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Kode anggota" aria-label="First name" name="kode_anggota" value="<?php echo $data['kode_anggota']; ?>"></td>
        </tr>
        <tr>
            <th>Nama Anggota</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama anggota" aria-label="First name" name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>"></td>
        </tr>
        <tr>

<th>Jenis Kelamin</th>

<td>

    <?php if ($data['jenis_kelamin'] == 'Perempuan') { ?>

        <input class="form-check-input" type="radio" id="flexRadioDefault1" value="Perempuan" name="jenis_kelamin" checked> Perempuan

    <?php } else { ?>

        <input class="form-check-input" type="radio" id="flexRadioDefault1" value="Perempuan" name="jenis_kelamin"> Perempuan

    <?php } ?>

</td>

</tr>

<tr>

<td></td>

<td>

    <?php if ($data['jenis_kelamin'] == 'Laki - laki') { ?>

        <input class="form-check-input" type="radio" id="flexRadioDefault2" value="Laki - laki" name="jenis_kelamin" checked> Laki - laki

    <?php } else { ?>

        <input class="form-check-input" type="radio" id="flexRadioDefault2" value="Laki - laki" name="jenis_kelamin"> Laki - laki

    <?php } ?>

</td>

</tr>
            <th>No. Telepon</th>
            <td><input type="text" class="form-control" placeholder="Masukkan No. Telepon" aria-label="First name" name="no_telp" value="<?php echo $data['no_telp']; ?>"></td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    <br>
    </center>
</body>
</html>