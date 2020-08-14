<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO prodi (nama_prodi,id_jurusan) values(
		'$_POST[nama_prodi]',
		'$_POST[id_jurusan]')");
	if ($simpan)
			header('location:index.php?p=prodi');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM prodi WHERE id_prodi='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=prodi');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE prodi SET 
		nama_prodi='$_POST[nama_prodi]',
		id_jurusan='$_POST[id_jurusan]'
		WHERE id_prodi='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=prodi');
}
}
?>