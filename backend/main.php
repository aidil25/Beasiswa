<?php
$p=isset($_GET['p']) ? $_GET['p'] : 'home';
if($p=='jenisbarang') include('jenisbarang.php');
if($p=='supplier') include('supplier.php');
if($p=='pelanggan') include('pelanggan.php');
if($p=='barang') include('barang.php');
if($p=='user') include('user.php');
if($p=='penjualan') include('penjualan.php');
if($p=='admin_informasi') include('admin_informasi.php');
if($p=='admin_panduan') include('admin_panduan.php');
if($p=='admin_persyaratan') include('admin_persyaratan.php');
if($p=='admin_jadwalseleksi') include('admin_jadwalseleksi.php');
if($p=='jenis_beasiswa') include('jenis_beasiswa.php');
if($p=='jurusan') include('jurusan.php');
if($p=='prodi') include('prodi.php');
if($p=='data_mahasiswa') include('data_mahasiswa.php');
if($p=='wawancara') include('wawancara.php');
if($p=='administrasi') include('administrasi_data.php');
if($p=='seleksi_akhir') include('seleksi_akhir.php');
if($p=='profil_penyeleksi') include('profil_penyeleksi.php');
?>