<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Daftar Peminjaman Buku</a>
    </div>
</nav>

<center>
    <form action="input_peminjaman.php" method="POST" style="margin-top:50px;" >
        <table cellpadding="10" cellspacing="15">
            <tr>
                <th colspan="3" style="font-size: xx-large;">Daftar Peminjaman Baru</th>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;"><img src="ions.png" alt="logo" style="width: 200px;  height: auto"></td>
            </tr>
            <tr>
                <th>Kode Anggota</th>
                <td>
                    <select class="form-control" name="kode_anggota">
                        <option selected disabled>Please Check</option>
                        <?php
                            include 'koneksi.php';

                            if (mysqli_connect_error()) {
                                echo "Koneksi database gagal: " . mysqli_connect_error();
                                exit();
                            }

                            $query = "SELECT kode_anggota FROM anggota";
                            $result = mysqli_query($connect, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['kode_anggota'] . "'>" . $row['kode_anggota'] . "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>
                    <select class="form-control" name="kategori" onchange="updateJudulBuku(this.value)">
                        <option selected disabled>Please Check</option>
                        <?php
                            include 'koneksi.php';

                            if (mysqli_connect_error()) {
                                echo "Koneksi database gagal: " . mysqli_connect_error();
                                exit();
                            }

                            $query = "SELECT DISTINCT kategori FROM buku";
                            $result = mysqli_query($connect, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['kategori'] . "'>" . $row['kategori'] . "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Judul Buku</th>
                <td>
                    <select class="form-control" name="judul_buku" id="judul_buku">
                        <option selected disabled>Please Check</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Tanggal Peminjaman</th>
                <td><input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam"></td>
            </tr>
            <tr>
                <th>Tanggal Pengembalian</th>
                <td><input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali"></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
    </form>
</center>

<script>
    function updateJudulBuku(kategori) {
        // Mendapatkan elemen dropdown judul buku
        var judulDropdown = document.getElementById("judul_buku");

        // Bersihkan opsi sebelum menambahkan yang baru
        judulDropdown.innerHTML = "<option selected disabled>Please Check</option>";

        // Kirim kategori yang dipilih ke server menggunakan AJAX
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Ketika respons diterima, tambahkan opsi judul buku ke dropdown
                var data = JSON.parse(xhr.responseText);
                data.forEach(function(judul) {
                    var option = document.createElement("option");
                    option.text = judul;
                    option.value = judul;
                    judulDropdown.add(option);
                });
            }
        };
        xhr.open("GET", "get_judul_buku.php?kategori=" + kategori, true);
        xhr.send();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
