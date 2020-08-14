<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO data_mahasiswa (nama_ayah,status_ayah,pendidikan_ayah,pekerjaan_ayah,penghasilan_ayah,nama_ibu,status_ibu,pendidikan_ibu,pekerjaan_ibu,penghasilan_ibu,nama_wali,status_wali,pendidikan_wali,pekerjaan_wali,penghasilan_wali) values(
		'$_POST[nama_ayah]',
		'$_POST[status_ayah]',
		'$_POST[pendidikan_ayah]',
		'$_POST[pekerjaan_ayah]',
		'$_POST[penghasilan_ayah]',
		'$_POST[nama_ibu]',
		'$_POST[status_ibu]',
		'$_POST[pendidikan_ibu]',
		'$_POST[pekerjaan_ibu]',
		'$_POST[penghasilan_ibu]',
		'$_POST[nama_wali]',
		'$_POST[status_wali]',
		'$_POST[pendidikan_wali]',
		'$_POST[pekerjaan_wali]',
		'$_POST[penghasilan_wali]')");
	if ($simpan)
			header('location:indexmahasiswa.php?p=data_keluarga');
}
}

if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
	if ($hapus)
	header('location:indexmahasiswa.php?p=data_keluarga');
}

if ($_GET['proses']=='ubah'){
	if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"UPDATE data_mahasiswa SET
		nama_ayah='$_POST[nama_ayah]',
		status_ayah='$_POST[status_ayah]',
		pendidikan_ayah='$_POST[pendidikan_ayah]',
		pekerjaan_ayah='$_POST[pekerjaan_ayah]',
		penghasilan_ayah='$_POST[penghasilan_ayah]',
		nama_ibu='$_POST[nama_ibu]',
		status_ibu='$_POST[status_ibu]',
		pendidikan_ibu='$_POST[pendidikan_ibu]',
		pekerjaan_ibu='$_POST[pekerjaan_ibu]',
		penghasilan_ibu='$_POST[penghasilan_ibu]',
		nama_wali='$_POST[nama_wali]',
		status_wali='$_POST[status_wali]',
		pendidikan_wali='$_POST[pendidikan_wali]',
		pekerjaan_wali='$_POST[pekerjaan_wali]',
		penghasilan_wali='$_POST[penghasilan_wali]'
		WHERE no_bp='$_GET[kode]'");
	if ($simpan)
			header('location:indexmahasiswa.php?p=data_keluarga');
}
}
?>