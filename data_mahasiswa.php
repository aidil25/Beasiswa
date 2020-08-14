<script>
$(document).ready(function(){
  $("#jurusan").change(function() {
    var jur=$("#jurusan").val();
    $.ajax( {
      url:"getProdi.php",
      data:"jurusan=" +jur,
      success:function(msg) {
        $("#prodi").html(msg);
      }
    });
  });
});
</script>
<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Beasiswa Politeknik Negeri Padang</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.php"><img src="img/pnp.png" alt="" width="80px" height="80px"></a>
                        <h2>Beasiswa Politeknik Negeri Padang</h2>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item dropdown"><a class="nav-link" href="index_mahasiswa.php">Beranda</a></li> 
                                <li class="nav-item dropdown"><a class="nav-link" href="informasi_mahasiswa.php">Informasi</a></li>  
                                <li class="nav-item dropdown"><a class="nav-link" href="daftar_beasiswa_mahasiswa.php">Daftar Beasiswa</a></li>   
                                <li class="nav-item dropdown"><a class="nav-link" href="jadwal_seleksi_mahasiswa.php">Jadwal Seleksi</a></li>  
                                <li class="nav-item active"><a class="nav-link" href="data_mahasiswa.php">Pendaftaran</a></li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                                        <li class="nav-item"><a class="nav-link" href="logout.php">Keluar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
                <div class="banner_inner d-flex align-items-center">
                    <div class="container">
                        <div class="banner_content text-center">
                            <div class="">
                     <br><br>
                     <h3>Input Data User</h3><br>
                    <form class="form-horizontal" role="form" action="aksi_data_mahasiswa.php?aksi=tambah" method="post"
                    enctype="multipart/form-data">
  
  <div class="row mt-2">
    <label for="jurusan" class="col-md-2" style="text-align: left;">No BP</label>
    <div class="col-md-5">
      <input type="text" class="form-control" id="no_bp" placeholder="Masukkan No BP" name="no_bp">
    </div>
  </div>
  
 <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;" >Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Tanggal Lahir</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_lahir"  name="tanggal_lahir" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-2" style="text-align: left;">
      Jenis Kelamin
    </div>
    <div class="col-md-5" style="text-align: left;">
      <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
      <input type="radio" name="jenis_kelamin" value="P">Perempuan
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2" style="text-align: left;">
            Agama
          </div>
          <div class="col-md-5" style="text-align: left;">
            <input type="radio" name="agama" value="Islam">Islam
            <input type="radio" name="agama" value="Katholik">Katholik
            <input type="radio" name="agama" value="Protestan">Protestan
            <input type="radio" name="agama" value="Budha">Budha
            <input type="radio" name="agama" value="Hindu">Hindu
          </div>
        </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">No Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telepon" placeholder="Masukkan No Telepon" name="no_telepon">
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" rows="5" cols="35">
      </textarea>
    </div>
  </div>

 <div class="row mt-2">
    <label for="keterangan" class="col-md-2 control-label" style="text-align: left;">Nama Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2" style="text-align: left;">
            Status
          </div>
          <div class="col-md-5" style="text-align: left;">
            <input type="radio" name="status_ayah" value="Hidup">Hidup
            <input type="radio" name="status_ayah" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="row mt-2">
      <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pendidikan</label>
      <div class="col-sm-10">
        <select name="pendidikan_ayah" style="text-align: left;">
          <option value="">Pendidikan Ayah</option>
          <option value="SD">SD Sederajat</option>
          <option value="SMP">SMP Sederajat</option>
          <option value="SMA">SMA Sederajat</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
        </select>
      </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah">
    </div>
  </div>
  
 <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Nama Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2" style="text-align: left;">
            Status
          </div>
          <div class="col-md-5" style="text-align: left;">
            <input type="radio" name="status_ibu" value="Hidup">Hidup
            <input type="radio" name="status_ibu" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pendidikan</label>
     <div class="col-sm-10">
    <select name="pendidikan_ibu" style="text-align: left;">
      <option value="">Pendidikan Ibu</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Masukkan Penghasilan Ibu">
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Jumlah Tanggungan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan" placeholder="Jumlah Tanggungan">
    </div>
  </div>
  <div class="row mt-2">
                
                                 <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Jurusan</label>
                            <div class="col-md-5">
                                <select class="form-control" name="jurusan" id="jurusan">
                                   <option>---Pilih Jurusan---</option>
                                    <?php
                                    include ('koneksi.php');
                                        $data = mysqli_query($koneksi,"select * from jurusan");
                                        while ($row=mysqli_fetch_array($data)) {
                                        echo "<option value ='$row[nama_jurusan]'>".$row['nama_jurusan']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
  
  <div class="row mt-2">
                            <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Prodi</label>
                            <div class="col-md-5">
                                <select class="form-control" name="prodi" id="prodi">
                <option>---Pilih Prodi---</option>
                                    <?php
                 include ('koneksi.php');
                  $data = mysqli_query($koneksi,"select * from prodi");
                  while ($row=mysqli_fetch_array($data)) {
                  echo "<option value = '$row[nama_prodi]'>".$row['nama_prodi']."</option>";
                  }
              ?>
                                </select>
                            </div>
                        </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="semester" name="semester" placeholder="Masukkan Semester">
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">IPK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Masukkan IPK">
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Sekolah Asal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Masukkan Sekolah Asal">
    </div>
  </div>

  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label"style="text-align: left;">Nilai Ijazah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nilai_ijazah" name="nilai_ijazah" placeholder="Masukkan Nilai Ijazah">
    </div>
  </div>


  <div class="row mt-2">
                            <div class="col-md-2" style="text-align: left;">
                                Surat Keterangan Tidak Mampu
                            </div>
                            <div class="col-md-5">
                                <input type="file" name="photo" class="form-control" >
                            </div>
                        </div>




 
  <div class="row mt-2">
                            <div class="col-md-2">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <input style="color: black;" type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
                                <input style="color: black;" type="reset" name="btnReset" value="Reset" class="btn btn-danger">
                            </div>
                        </div>
</form>
                   <!--  <?php
                        // break;
                        // case 'edit':
                        // $koneksi=mysqli_connect('localhost','root','','beasiswa');
                        // $ambil = mysqli_query($koneksi,"select * from user where username='$_GET[kode]'");
                        // $data = mysqli_fetch_array($ambil);


                    ?> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
       
        <!--================End Home Blog Area =================-->
        
        <!--================Instagram Area =================-->
       
        <!--================End Instagram Area =================-->
        
        <!--================Footer Area =================-->
       
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>