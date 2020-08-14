<?php
include ('koneksi.php');
if ($_GET['aksi']=='tambah'){
	if (isset($_POST['btnSubmit'])) {
		$email = isset($_POST['email'])?$_POST['email']:'';
		$nama_file = $_FILES['photo']['name'];
		$tmp_file =$_FILES['photo']['tmp_name'];
		$path="images/".$nama_file;
		$tipe_file =$_FILES['photo']['type'];
	if(!empty($nama_file)){

		if($tipe_file =="image/jpeg" or $tipe_file == "image/png"){
			
			$simpan=mysqli_query($koneksi,"INSERT INTO data_mahasiswa (no_bp,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,email,no_telepon,alamat,nama_ayah,status_ayah,pendidikan_ayah,pekerjaan_ayah,penghasilan_ayah,nama_ibu,status_ibu,pendidikan_ibu,pekerjaan_ibu,penghasilan_ibu,jumlah_tanggungan,jurusan,prodi,semester,ipk,sekolah_asal,nilai_ijazah,surat_tidak_mampu) values(
		'$_POST[no_bp]',
		'$_POST[nama]',
		'$_POST[tempat_lahir]',
		'$_POST[tanggal_lahir]',
		'$_POST[jenis_kelamin]',
		'$_POST[agama]',
		'$_POST[email]',
		'$_POST[no_telepon]',
		'$_POST[alamat]',
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
		'$_POST[jumlah_tanggungan]',
		'$_POST[jurusan]',
		'$_POST[prodi]',
		'$_POST[semester]',
		'$_POST[ipk]',
		'$_POST[sekolah_asal]',
		'$_POST[nilai_ijazah]',
		'$nama_file')");
			include('PHPMailer/mail.php');
			if ($simpan){
				move_uploaded_file($tmp_file, $path);
				header('location:index_mahasiswa.php');
			}else{
				echo "<script>window.alert('ERROR')</script>";
			}
		
		}else{
			echo "<script>window.alert('File di upload harus berekstensi JPEG')</script>";
		}
	}else{
			$nama_file="default.jpg";
			$simpan=mysqli_query($koneksi,"INSERT INTO data_mahasiswa ('$_POST[no_bp]',
		'$_POST[nama]',
		'$_POST[tempat_lahir]',
		'$_POST[tanggal_lahir]',
		'$_POST[jenis_kelamin]',
		'$_POST[agama]',
		'$_POST[email]',
		'$_POST[no_telepon]',
		'$_POST[alamat]',
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
		'$_POST[jumlah_tanggungan]',
		'$_POST[jurusan]',
		'$_POST[prodi]',
		'$_POST[semester]',
		'$_POST[ipk]',
		'$_POST[sekolah_asal]',
		'$_POST[nilai_ijazah]',
		'$nama_file')");
			if ($simpan){
				header('location:index_mahasiswa.php');
			}
		}
	}
}
// if ($_GET['aksi']=='hapus'){
// 	$hapus=mysqli_query($koneksi,"DELETE FROM user WHERE username='$_GET[kode]'");
// 	$File="images/".$_GET[foto];
// 	if ($hapus) {
// 		unlink($File);
// 		header('location:index.php?p=user');
// 	}
// }

// if ($_GET['aksi']=='ubah'){
// 	if (isset($_POST['btnSubmit'])) {
// 			$nama_file = $_FILES['photo']['name'];
// 			$tmp_file =$_FILES['photo']['tmp_name'];
// 			$path="images/".$nama_file;
// 			$tipe_file =$_FILES['photo']['type'];
// 		if (!empty($nama_file)){
// 			$simpan=mysqli_query($koneksi,"UPDATE user SET 
// 			username='$_POST[username]',
// 			password=md5('$_POST[password]'),
// 			level='$_POST[level]',
// 			email='$_POST[email]',
// 			telp='$_POST[telp]',
// 			photo='$nama_file'
// 		WHERE username='$_GET[kode]'");
// 		if ($simpan){
// 			move_uploaded_file($tmp_file, $path);
// 			header('location:index.php?p=user');
// 		}
			
// 		}
// 		else {
// 			$simpan=mysqli_query($koneksi,"UPDATE user SET 
// 			username='$_POST[username]',
// 			password=md5('$_POST[password]'),
// 			level='$_POST[level]',
// 			email='$_POST[email]',
// 			telp='$_POST[telp]',
// 			photo='default.jpg'
// 			WHERE username='$_GET[kode]'");
// 			if ($simpan){
// 			header('location:index.php?p=user');
// 		}
// 		}
// 	}	
// }
?>