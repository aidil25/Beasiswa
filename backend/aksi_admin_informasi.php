<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO admin_informasi (judul,konten_informasi,id_jenis_beasiswa) values(
		'$_POST[judul]',
		'$_POST[konten_informasi]',
		'$_POST[id_jenis_beasiswa]')");
	if ($simpan)
			header('location:index.php?p=admin_informasi');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM admin_informasi WHERE id='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=admin_informasi');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE admin_informasi SET 
		judul='$_POST[judul]',
		konten_informasi='$_POST[konten_informasi]',
		id_jenis_beasiswa='$_POST[id_jenis_beasiswa]'
		WHERE id='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=admin_informasi');
}
}
?>