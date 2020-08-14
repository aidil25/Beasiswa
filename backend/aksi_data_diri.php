<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO data_mahasiswa (no_bp,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,email,no_telepon,alamat) values(
		'$_POST[no_bp]',
		'$_POST[nama]',
		'$_POST[tempat_lahir]',
		'$_POST[tanggal_lahir]',
		'$_POST[jenis_kelamin]',
		'$_POST[agama]',
		'$_POST[email]',
		'$_POST[no_telepon]',
		'$_POST[alamat]')");
	if ($simpan)
			header('location:indexmahasiswa.php?p=data_diri');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
	if ($hapus)
	header('location:indexmahasiswa.php?p=data_diri');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE data_mahasiswa SET
		no_bp='$_POST[no_bp]',
		nama='$_POST[nama]',
		tempat_lahir='$_POST[tempat_lahir]',
		tanggal_lahir='$_POST[tanggal_lahir]',
		jenis_kelamin='$_POST[jenis_kelamin]',
		agama='$_POST[agama]',
		email='$_POST[email]',
		no_telepon='$_POST[no_telepon]',
		alamat='$_POST[alamat]'
		WHERE no_bp='$_GET[kode]'");
	if ($simpan)
			header('location:indexmahasiswa.php?p=data_diri');
}
}
?>