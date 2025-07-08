<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'kelompok_3');


?>