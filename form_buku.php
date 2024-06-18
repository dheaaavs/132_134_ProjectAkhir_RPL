<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Daftar Buku</a>
  </div>
  </nav>

    <center>
    <form action="input_buku.php" method="POST" style="margin-top:50px;" >
    <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Daftar Item Buku Baru</th>
        <td></td>
        <td><img src="buku3.jpg" alt="logo" style="width: 200px;  height: auto"></td>
        </tr>
        <tr>
            <th>Kode Buku</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Kode Buku" aria-label="First name" name="kode_buku"></td>
        </tr>
        <tr>
            <th>Judul Buku</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Buku" aria-label="First name" name="judul_buku"></td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>
            <select class="col-10 form-select-sm" aria-label="Small select example" name="kategori">
            <option selected>Please Check</option>
            <option value="Bahasa" >Bahasa</option>
            <option value="Referensi<" >Referensi</option>
            <option value="Musik" >Musik</option>
            </select>
            </td>
        </tr>
        <tr>
            <th>Pengarang</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Pengarang" aria-label="First name" name="pengarang"></td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama Penerbit" aria-label="First name" name="penerbit"></td>
        </tr>
        <tr>
            <th>Tahun Terbit</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Tahun Terbit" aria-label="First name" name="thn_terbit"></td>
        </tr>
        <tr>
            <th>Stok Buku</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Jumlah Stok" aria-label="First name" name="stok"></td>
        </tr>
        <tr>
            <th>Sinopsis</th>
            <td><textarea class="form-control" id="exampleFormControlTextarea1" name="sinopsis"></textarea></td>
        </tr>
        <tr>
            <th>Rak</th>
            <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="1" name="id_rak"> Belajar Umum </td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault2" value="2" name="id_rak"> Buku Referensi</td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="3" name="id_rak"> Sastra dan Bahasa </td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault2" value="4" name="id_rak"> Seni dan Musik </td>
        </tr>
        <tr>
          <td></td>
          <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="5" name="id_rak"> Sains dan Teknologi </td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>