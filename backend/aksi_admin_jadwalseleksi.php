<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO admin_jadwalseleksi (nama_seleksi,tanggal_mulai,tanggal_selesai,pengumuman,id_jenis_beasiswa) values(
		'$_POST[nama_seleksi]',
		'$_POST[tanggal_mulai]',
		'$_POST[tanggal_selesai]',
		'$_POST[pengumuman]',
		'$_POST[id_jenis_beasiswa]'
	)");
	if ($simpan)
			header('location:index.php?p=admin_jadwalseleksi');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM admin_jadwalseleksi WHERE id='$_GET[kode]'");
	if ($hapus)
	header('location:index.php?p=admin_jadwalseleksi');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE admin_jadwalseleksi SET 
		nama_seleksi='$_POST[nama_seleksi]',
		tanggal_mulai='$_POST[tanggal_mulai]',
		tanggal_selesai='$_POST[tanggal_selesai]',
		pengumuman='$_POST[pengumuman]',
		id_jenis_beasiswa='$_POST[id_jenis_beasiswa]'
		WHERE id='$_GET[kode]'");
	if ($simpan)
			header('location:index.php?p=admin_jadwalseleksi');
}
}
?>