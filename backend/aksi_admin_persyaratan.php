<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO admin_persyaratan (judul,konten_persyaratan,id_jenis_beasiswa) values(
		'$_POST[judul]',
		'$_POST[konten_persyaratan]',
		'$_POST[id_jenis_beasiswa]')");
	if ($simpan)
			header('location:index.php?p=admin_persyaratan');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM admin_persyaratan WHERE id='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=admin_persyaratan');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE admin_persyaratan SET 
		judul='$_POST[judul]',
		konten_persyaratan='$_POST[konten_persyaratan]',
		id_jenis_beasiswa='$_POST[id_jenis_beasiswa]'
		WHERE id='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=admin_persyaratan');
}
}
?>