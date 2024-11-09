<?php
session_start(); // Memulai sesi

// Menghapus semua variabel sesi
$_SESSION = array();

// Jika ingin menghapus cookie sesi, lakukan hal berikut
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Menghancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman yang diinginkan
header("Location: login.php"); // Ganti dengan URL halaman yang diinginkan
exit;
