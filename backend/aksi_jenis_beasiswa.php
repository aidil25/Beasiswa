<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO jenis_beasiswa (jenis_beasiswa) values(
		'$_POST[jenis_beasiswa]')");
	if ($simpan)
			header('location:index.php?p=jenis_beasiswa');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM jenis_beasiswa WHERE id_jenis_beasiswa='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=jenis_beasiswa');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE jenis_beasiswa SET 
		jenis_beasiswa='$_POST[jenis_beasiswa]'
		WHERE id='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=jenis_beasiswa');
}
}
?>