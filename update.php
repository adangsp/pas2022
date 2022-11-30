<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat', jenis_kelamin='jenis_kelamin', tempat_lahir='tempat_lahir', tanggal_lahir='tanggal_lahir' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>