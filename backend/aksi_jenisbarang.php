<?php
$koneksi=mysqli_connect('localhost','root','','db_iventory');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO jenis_barang(nama_jenis,keterangan) values(
		'$_POST[jenisbarang]',
		'$_POST[keterangan]'
		)");
	if ($simpan)
			header('location:index.php?p=jenisbarang');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM jenis_barang WHERE id_jenis='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=jenisbarang');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE jenis_barang SET nama_jenis='$_POST[jenisbarang]',keterangan='$_POST[keterangan]' WHERE id_jenis='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=jenisbarang');
}
}
?>