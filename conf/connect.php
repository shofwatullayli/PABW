<?php

//inisialisasi nilai2 parameter koneksi
$namaServer = "localhost"; //sesuai nama server
$namaPengguna ="root"; //sesuai nama pengguna
$password = "";
$nama_db = "rumah_sakit";

//membuat koneksi
$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);
//memeriksa apakah koneksi sukses dilakukan
if ($koneksi->connect_error) {
	die("Koneksi gagal: ".$koneksi->connect_error."<br>");
}
echo " ";
?>