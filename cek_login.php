<?php
session_start(); 
$connection = new mysqli('localhost', 'root', '', 'perpustakaan');

$username = $_POST['username'];
$password = $_POST['password'];

// Cek login untuk anggota
$login_anggota = mysqli_query($connection, "SELECT * FROM anggota WHERE nama_anggota = '$username' AND kode_anggota = '$password'");
$cek_anggota = mysqli_num_rows($login_anggota);

if($cek_anggota > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:dashboardanggota.php");
    exit();
}

// Cek login untuk admin
$login_admin = mysqli_query($connection, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
$cek_admin = mysqli_num_rows($login_admin);

if($cek_admin > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
    exit();
}

// Cek login untuk manager perpustakaan
$login_manager = mysqli_query($connection, "SELECT * FROM manager_perpus WHERE ussername_manager = '$username' AND password_manager = '$password'");
$cek_manager = mysqli_num_rows($login_manager);

if($cek_manager > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:dashboardmanager.php");
    exit();
} else {
    // Jika semua login gagal
    header("location:login.php?pesan=gagal");
    exit();
}
?>
