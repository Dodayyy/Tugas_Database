<?php
include("Koneksi.php");

$nim = $_POST['txtnim'];
$nama = $_POST['txtnama'];
$jenkel = $_POST['txtjenkel'];
$lahir = $_POST['txtlahir'];
$hp = $_POST['txthp'];

// Proses Simpan Database

$sql = "insert into mahasiswa values ('$nim', '$nama', '$jenkel', '$lahir', '$hp')";
$proses = mysqli_query($koneksi, $sql);

if ($proses) {
    header("location:Tampil2.php"); //Berfungsi untuk menampilkan data yang sudah di isi 
}
