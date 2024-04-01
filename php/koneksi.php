<?php
$servername = "localhost";
$database = "data_users";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$sonn) {
    die("Koneksi gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}