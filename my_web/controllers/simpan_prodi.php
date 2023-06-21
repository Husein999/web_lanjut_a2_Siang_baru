<?php
require "../functions.php";
$nama_prodi = $_POST["nama_prodi"];

$simpan = q("INSERT INTO prodi VALUES(null,'$nama_prodi')");
if ($simpan) {
  echo "berhasil";
} else {
  echo "gagal";
}
