<?php
include ('koneksi.php');
if ($_GET['aksi']=='tambah'){
	if (isset($_POST['btnSubmit'])) {
		$idmhs = $_GET['nobpmhs'];
		$idbeasiswa = isset($_POST['idjenisbeasiswa'])?$_POST['idjenisbeasiswa']:'';
		$simpan = mysqli_query($koneksi,"insert into administrasi_data values(0,'$idbeasiswa','$idmhs','Tidak Lulus')");
          if($simpan){
            header('location:../frontend/index_mahasiswa.php');
          }else{
            echo "<script>alert('Error')</script>";
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