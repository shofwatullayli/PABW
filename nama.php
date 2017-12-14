<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src='jquery-3.2.1.min.js'></script>
  <script type="text/javascript" src='transversing.js'></script>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: black;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}
a:link {
    color: #FB667A;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: pink;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: black;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
img {
  width : 300px;
  height : 300px;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
	</style>
</head>

<body>
	  
<h1>Daftar Nama Pasien</h1>
<script type="text/javascript" src='jquery-3.2.1.min.js'></script>
<script type="text/javascript" src='transversing.js'></script>

<?php

  
include "conf/connect.php";

//akses isi tabel
$sql = "SELECT * FROM pasien";
$hasil = $koneksi->query($sql);


echo "<table class='container'>
<tr>
<th>No Urut</th>
<th>Nama Pasien</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Usia</th>
<th>Id Perawat</th>
<th>Aksi</th>
</tr>";
if ($hasil->num_rows > 0) {
  while ($baris = $hasil->fetch_assoc()) {
    $id = $baris['idpasien'];
    $nama = $baris['nama'];
    $jk = $baris['jeniskelamin'];
    $alamat = $baris['alamat'];
    $usia = $baris['usia'];
    $idperawat = $baris['idperawat'];
    echo "<tr><td>$id</td>";
    echo "<td>$nama</td>
        <td>$jk</td>
        <td>$alamat</td>
        <td>$usia</td>
        <td>$idperawat</td>
        <td>

        <a href='ubahpasien.php?idpasien=$id'>Edit</a>

        <a href='hapuspasien.php?idpasien=$id'>Hapus</a>

        </td>

        </tr>";
  }
  echo "</table>";
 //  echo "
 //  <ul>
 //    <li> <a href='tambahpasien.php?id'>[+] Daftarkan Pasien Baru</a><br><br></li>
 //    <li><a href='index.php?id'>Home</a></li>
 //  </ul>
 // ";
} else {
  echo "Data tidak ditemukan.";
}
$koneksi->close();

?>
<div><h4>Aksi Lainnya</h4></div>
  <ul>
    <li> <a href='tambahpasien.php?id'>[+] Daftarkan Pasien Baru</a><br><br></li>
    <li><a href='index.php?id'>Home</a></li>
  </ul>

</body>
</html>