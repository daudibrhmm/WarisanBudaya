<?php
require 'koneksi.php';
$email = $_POST["Email"];
$password = $_POST["Password"];
$password_fix = $_POST["Masukan ulang password"];

$query_sql = "INSERT INTO tbl_users (Email, Password, Masukan ulang password)
            VALUES ('$email', '$password', '$password_fix')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran gagal : " . mysqli_error($conn);
}