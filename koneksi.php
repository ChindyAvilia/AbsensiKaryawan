<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "perkantoran";
$kon = mysqli_connect($host, $user, $pass);
if (!$kon) {
    die("Gagal Koneksi...");
}
$hasil = mysqli_select_db($kon, $dbName);
if (!$hasil) {
    $hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
    
    if (!$hasil) {
        die("Gagal Buat Database");
    } else {
        $hasil = mysqli_select_db($kon, $dbName);
        if (!$hasil) {
            die("Gagal Konek Database");
        }
    }
}
$sqlTabelKaryawan = "CREATE TABLE IF NOT EXISTS karyawan (
    id_karyawan INT AUTO_INCREMENT PRIMARY KEY,
    nama_karyawan VARCHAR(50) NOT NULL,
    jabatan VARCHAR(50),
    alamat VARCHAR(50)
)";
$hasilTabelKaryawan = mysqli_query($kon, $sqlTabelKaryawan);
if (!$hasilTabelKaryawan) {
die("Gagal membuat tabel karyawan: " . mysqli_error($kon));
}

$sqlTabelAbsensi = "CREATE TABLE IF NOT EXISTS absensi (
    id_absensi INT AUTO_INCREMENT PRIMARY KEY,
    id_karyawan INT,
    tanggal DATE,
    hadir BOOLEAN,
    keterangan TEXT,
    FOREIGN KEY (id_karyawan) REFERENCES karyawan(id_karyawan)
)";

$hasilTabelAbsensi = mysqli_query($kon, $sqlTabelAbsensi);
if (!$hasilTabelAbsensi) {
    die("Gagal membuat tabel absensi: " . mysqli_error($kon));
}
?>