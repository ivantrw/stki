<?php
//include 'index.php';


$koneksi  = mysqli_connect("localhost",  "root",  "", "stki");
$pilihdatabase  = mysqli_select_db($koneksi, "stki");
if  ($pilihdatabase) echo "<h3>Koneksi Berhasil </h3><hr><br/>";
else echo "Koneksi Gagal <br/>";
?>