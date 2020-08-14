<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO admin_panduan (judul,konten_panduan,id_jenis_beasiswa) values(
		'$_POST[judul]',
		'$_POST[konten_panduan]',
		'$_POST[id_jenis_beasiswa]'
	)");
	if ($simpan)
			header('location:index.php?p=admin_panduan');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM admin_panduan WHERE id='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=admin_panduan');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE admin_panduan SET 
		judul='$_POST[judul]',
		konten_panduan='$_POST[konten_panduan]',
		id_jenis_beasiswa='$_POST[id_jenis_beasiswa]'
		WHERE id='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=admin_panduan');
}
}
?>