<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO jurusan (nama_jurusan) values(
		'$_POST[nama_jurusan]')");
	if ($simpan)
			header('location:index.php?p=jurusan');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM jurusan WHERE id_jurusan='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=jurusan');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE jurusan SET 
		nama_jurusan='$_POST[nama_jurusan]'
		WHERE id_jurusan='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=jurusan');
}
}
?>