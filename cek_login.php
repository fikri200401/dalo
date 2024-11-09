<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
$name = $_POST['nama'];


$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    if ($data['jabatan'] == "Admin") {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['jabatan'] = "Admin";
        header("location:admin/index.php");
    } else if ($data['jabatan'] == "kasir") {
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = "Kasir";
        header("location:kasir/kasir.php");
    } else {

        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
