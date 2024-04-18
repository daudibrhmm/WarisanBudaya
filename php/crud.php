<?php

// panggil koneksi database
include "koneksi.php";

// uji jika tombol simpan di klik
if (isset($_POST["bsimpan"])) {

    // persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO situs_budaya (nama, kategori, lokasi) VALUES ('$_POST[nama]', '$_POST[kategori]', '$_POST[lokasi]')");

    // jika simpan sukses
    if ($simpan) {
        echo "<script>
        alert('Simpan data Sukses!');
        document.location='halaman_edit.php';
        </script>";
    } else {
        echo "<script>
        alert('Simpan data Gagal!');
        document.location='halaman_edit.php';
        </script>";
    }
}

// uji jika tombol ubah di klik
if (isset($_POST["bubah"])) {

    // persiapan ubah data 
    $ubah = mysqli_query($koneksi, "UPDATE situs_budaya SET nama = '$_POST[nama]', kategori = '$_POST[kategori]', lokasi = '$_POST[lokasi]' WHERE id = '$_POST[id]'");

    // jika simpan sukses
    if ($ubah) {
        echo "<script>
        alert('Ubah data Sukses!');
        document.location='halaman_edit.php';
        </script>";
    } else {
        echo "<script>
        alert('Ubah data Gagal!');
        document.location='halaman_edit.php';
        </script>";
    }
}

// uji jika tombol hapus di klik
if (isset($_POST["bhapus"])) {

    // persiapan hapus data 
    $hapus = mysqli_query($koneksi, "DELETE FROM situs_budaya WHERE id = '$_POST[id]'");

    // jika hapus sukses
    if ($hapus) {
        echo "<script>
        alert('Hapus data Sukses!');
        document.location='halaman_edit.php';
        </script>";
    } else {
        echo "<script>
        alert('Hapus data Gagal!');
        document.location='halaman_edit.php';
        </script>";
    }
}

// feedback
if (isset($_POST["sent"])) {

    // persiapan simpan data baru
    $sent = mysqli_query($koneksi, "INSERT INTO feedback (namaUser, email, feedback) VALUES ('$_POST[namaUser]', '$_POST[email]', '$_POST[feedback]')");

    // jika simpan sukses
    if ($sent) {
        echo "<script>
        alert('Feedback Sent Successfully!');
        document.location='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Feedback Sent Failed!');
        document.location='index.php';
        </script>";
    }
}
?>