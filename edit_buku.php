<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <?php 
        include 'koneksi.php';
        $idbuku = $_GET['id_buku'];
        $query = mysqli_query($connect, "SELECT * FROM buku
                WHERE id_buku='$idbuku'");
        $data = mysqli_fetch_array($query);
    ?>

    <center>
        <h1 class="text-secondary mb-4">Update Data Buku</h1>

        <form action="proses_editbuku.php" method="POST" >
        <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Edit Data Buku</th>
        <td></td>
        <td><img src="ions.png" alt="logo" style="width: 200px;  height: auto"></td>
        </tr>
        <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
        <tr>
            <th>Kode Buku</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Kode Buku" aria-label="First name" name="kode_buku" value="<?php echo $data['kode_buku']; ?>"></td>
        </tr>
        <tr>
            <th>Judul Buku</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Buku" aria-label="First name" name="judul_buku" value="<?php echo $data['judul_buku']; ?>"></td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>
            <select class="col-10 form-select-sm" aria-label="Small select example" name="kategori">

            <option <?php if($data['kategori'] == 'Bahasa') echo 'selected'; ?> value="Bahasa" >Bahasa</option>

            <option <?php if($data['kategori'] == 'Referensi') echo 'selected'; ?> value="Referensi" >Referensi</option>

            <option <?php if($data['kategori'] == 'Musik') echo 'selected'; ?> value="Musik" >Musik</option>

            </select>

            </td>
            </select>
            </td>
        </tr>
        <tr>
            <th>Pengarang</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Pengarang" aria-label="First name" name="pengarang" value="<?php echo $data['pengarang']; ?>"></td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Penerbit" aria-label="First name" name="penerbit" value="<?php echo $data['penerbit']; ?>"></td>
        </tr>
        <tr>
            <th>Tahun Terbit</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Tahun Terbit" aria-label="First name" name="thn_terbit" value="<?php echo $data['thn_terbit']; ?>"></td>
        </tr>
        <tr>
            <th>Stok Buku</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Jumlah Stok" aria-label="First name" name="stok" value="<?php echo $data['stok']; ?>"></td>
        </tr>
        <tr>

            <th>Sinopsis</th>

            <td><textarea class="form-control" id="exampleFormControlTextarea1" name="sinopsis"><?php echo $data['sinopsis']; ?></textarea></td>

        </tr>
        <tr>
            <th>Rak</th>
            <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="1" name="id_rak" <?php if($data['id_rak'] == 1) echo 'checked'; ?>> Belajar Umum</td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="2" name="id_rak" <?php if($data['id_rak'] == 2) echo 'checked'; ?>> Buku Referensi</td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="3" name="id_rak" <?php if($data['id_rak'] == 3) echo 'checked'; ?>> Sastra dan Bahasa</td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="4" name="id_rak" <?php if($data['id_rak'] == 4) echo 'checked'; ?>> Seni dan Musik</td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="5" name="id_rak" <?php if($data['id_rak'] == 5) echo 'checked'; ?>> Sains dan Teknologi</td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    <br>
    </center>
</body>
</html>