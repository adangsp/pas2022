<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat','$pekerjaan','$jenis_kelamin','$tempat_lahir','$tanggal_lahir')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>