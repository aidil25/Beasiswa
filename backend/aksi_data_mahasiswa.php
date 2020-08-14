<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
if (isset($_POST['submit'])) {
	$simpan=mysqli_query($koneksi,"INSERT INTO data_mahasiswa (no_bp,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,email,no_telepon,alamat) values(
		'$_POST[no_bp]',
		'$_POST[nama]'
		-- ,
		-- '$_POST[tempat_lahir]',
		-- '$_POST[tanggal_lahir]',
		-- '$_POST[jenis_kelamin]',
		-- '$_POST[agama]',
		-- '$_POST[email]',
		-- '$_POST[no_telepon]',
		-- '$_POST[alamat]
	)");
	if ($simpan)
			header('location:indexmahasiswa.php?p=data_diri');
}
}

else if ($_GET['proses']=='hapus'){
	$hapus=mysqli_query($koneksi,"DELETE FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
	if ($hapus)
	header('location:indexmahasiswa.php?p=data_diri');
}

if ($_GET['proses']=='ubah'){
	$no_bp = $_GET['kode'];
	if (isset($_POST['lulus'])) {
	$simpan=mysqli_query($koneksi,"UPDATE administrasi_data SET
		status='Lulus'
		WHERE nobp = '$no_bp'");
			if ($simpan){
					header('location:index_penyeleksi.php?p=data_mahasiswa');
			}else{
				echo "<script>alert('Error')</script>";
			}
	}else if (isset($_POST['tidak'])){
		$simpan1=mysqli_query($koneksi,"UPDATE administrasi_data SET
		status='Tidak Lulus'
		WHERE nobp='$no_bp'");
		if ($simpan1){
			header('location:index_penyeleksi.php?p=data_mahasiswa');
		}else{
			echo "<script>alert('Error')</script>";
		}
	}
}
?>