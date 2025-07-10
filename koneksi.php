<?php


$host = 'sql100.infinityfree.com'; // ganti XXX sesuai info dari cpanel
$user = 'if0_39438926'; // username dari cpanel
$pass = 'bdG9qCU9oyGLA'; // password akun database
$db   = 'if0_39438926_kelompok_3';
$koneksi = mysqli_connect($host, $user, $pass ,$db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>