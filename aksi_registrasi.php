<?php
include ('koneksi.php');
if ($_GET['aksi']=='tambah'){
	if (isset($_POST['btnSubmit'])) {
		$email = isset($_POST['email'])?$_POST['email']:'';
		$nama_file = $_FILES['photo']['name'];
		$tmp_file =$_FILES['photo']['tmp_name'];
		$path="images/".$nama_file;
		$tipe_file =$_FILES['photo']['type'];
		$token = hash('sha256', md5(date('Y-m-d')));
	if(!empty($nama_file)){

		if($tipe_file =="image/jpeg" or $tipe_file == "image/png"){
			$sql_cek = mysqli_query($koneksi,"SELECT * FROM user WHERE email='".$email."'");
			$r_cek = mysqli_fetch_array($sql_cek);
			if ($r_cek>0){
        		echo '<div class="alert alert-warning">Email anda sudah pernah terdaftar!</div>';
     		}else{
			$simpan=mysqli_query($koneksi,"INSERT INTO user (nama,username,password,level,email,telepon,photo,hash,aktif) values('$_POST[nama]','$_POST[username]',md5('$_POST[password]'),'$_POST[level]','$_POST[email]','$_POST[telepon]','$nama_file','$token','0')");
			include('backend/PHPMailer/mail.php');
			if ($simpan){
				move_uploaded_file($tmp_file, $path);

				header('location:masuk.php');
			}else{
				echo "<script>window.alert('ERROR')</script>";
			}
		}
		}else{
			echo "<script>window.alert('File di upload harus berekstensi JPEG')</script>";
		}
	}else{
			$nama_file="default.jpg";
			$simpan=mysqli_query($koneksi,"INSERT INTO user (nama,username,password,level,email,telepon,photo,hash,aktif) values('$_POST[nama]','$_POST[username]',md5('$_POST[password]'),'$_POST[level]','$_POST[email]','$_POST[telepon]','$nama_file','$token','0')");
			if ($simpan){
				header('location:masuk.php');
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

else if ($_GET['aksi']=='ubah'){
	if (isset($_POST['btnSubmit'])) {
			$nama_file = $_FILES['photo']['name'];
			$tmp_file =$_FILES['photo']['tmp_name'];
			$path="images/".$nama_file;
			$tipe_file =$_FILES['photo']['type'];
		if (!empty($nama_file)){
			$simpan=mysqli_query($koneksi,"UPDATE user SET 
			password=md5('$_POST[password]'),
			level='$_POST[level]',
			email='$_POST[email]',
			telepon='$_POST[telepon]',
			photo='$nama_file'
		WHERE username='$_GET[kode]'");
		if ($simpan){
			move_uploaded_file($tmp_file, $path);
			header('location:profil.php');
		}else{
			echo "<script>window.alert('ERROR')</script>";
		}
		}
	}	
}
?>