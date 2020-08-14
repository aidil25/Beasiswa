<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$no_bp = $_GET['kode'];
	$ekonomi = isset($_POST['ekonomi'])?$_POST['ekonomi']:'';
    $akademik = isset($_POST['akademik'])?$_POST['akademik']:'';
    $non_akademik = isset($_POST['non_akademik'])?$_POST['non_akademik']:'';
    $keluarga = isset($_POST['keluarga'])?$_POST['keluarga']:'';
    $keseharian = isset($_POST['keseharian'])?$_POST['keseharian']:'';
    $jumlah= $ekonomi+$akademik+$non_akademik+$keluarga+$keseharian;
    if($jumlah>60){
	$simpan=mysqli_query($koneksi,"INSERT INTO wawancara (id,nobp_,ekonomi,akademik,non_akademik,keluarga,keseharian,total,status) values(
		0,
		'$no_bp',
		'$ekonomi',
		'$akademik',
		'$non_akademik',
		'$keluarga',
		'$keseharian',
		'$jumlah',
		'Lulus'
	)");
	if ($simpan){
			header('location:index_penyeleksi.php?p=wawancara');
		}
	}else{
		$simpan=mysqli_query($koneksi,"INSERT INTO wawancara (id,nobp_,ekonomi,akademik,non_akademik,keluarga,keseharian,total,status) values(
		0,
		'$no_bp',
		'$ekonomi',
		'$akademik',
		'$non_akademik',
		'$keluarga',
		'$keseharian',
		'$jumlah',
		'Tidak Lulus'
	)");
	if ($simpan){
			header('location:index_penyeleksi.php?p=wawancara');
		}
	}
}
}

// if ($_GET['proses']=='hapus'){
// 	$hapus=mysqli_query($koneksi,"DELETE FROM wawancara WHERE no_bp='$_GET[kode]'");
// 	if ($hapus)
// 	header('location:indexmahasiswa.php?p=data_diri');
// }

// if ($_GET['proses']=='ubah'){
// 	if (isset($_POST['submit'])) {
// 	$simpan=mysqli_query($koneksi,"UPDATE data_mahasiswa SET
// 		no_bp='$_POST[no_bp]',
// 		nama='$_POST[nama]',
// 		tempat_lahir='$_POST[tempat_lahir]',
// 		tanggal_lahir='$_POST[tanggal_lahir]',
// 		jenis_kelamin='$_POST[jenis_kelamin]',
// 		agama='$_POST[agama]',
// 		email='$_POST[email]',
// 		no_telepon='$_POST[no_telepon]',
// 		alamat='$_POST[alamat]'
// 		WHERE no_bp='$_GET[kode]'");
// 	if ($simpan)
// 			header('location:indexmahasiswa.php?p=data_diri');
// }
// }
?>