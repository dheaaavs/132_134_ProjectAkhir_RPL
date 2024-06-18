<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Daftar Anggota</a>
  </div>
  </nav>

    <center>
    <form action="input_anggota.php" method="POST" style="margin-top:50px;" >
    <table cellpadding=10 cellspacing=15>
        <tr>
        <th style="font-size: xx-large;">Daftar Anggota Baru</th>
        <td></td>
        <td><img src="ions.png" alt="logo" style="width: 200px;  height: auto"></td>
        </tr>
        <tr>
            <th>Kode Anggota</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Kode anggota" aria-label="First name" name="kode_anggota"></td>
        </tr>
        <tr>
            <th>Nama Anggota</th>
            <td><input type="text" class="form-control" placeholder="Masukkan Nama anggota" aria-label="First name" name="nama_anggota"></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><input class="form-check-input" type="radio" id="flexRadioDefault1" value="Perempuan" name="jenis_kelamin"> Perempuan </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="form-check-input" type="radio" id="flexRadioDefault2" value="Laki - laki" name="jenis_kelamin"> Laki - laki</td>
        <tr>
            <th>No. Telepon</th>
            <td><input type="text" class="form-control" placeholder="Masukkan No. Telepon" aria-label="First name" name="no_telp"></td>
        </tr>
    </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>