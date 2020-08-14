<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Flash Photography</title>
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
                                <li class="nav-item dropdown"><a class="nav-link" href="index.php">Beranda</a></li> 
                                <li class="nav-item dropdown"><a class="nav-link" href="informasi.php">Informasi</a></li>  
                                <li class="nav-item dropdown"><a class="nav-link" href="panduan.php">Panduan</a></li>  
                                <li class="nav-item dropdown"><a class="nav-link" href="jadwal_seleksi.php">Jadwal Seleksi</a></li> 
                                <li class="nav-item dropdown"><a class="nav-link" href="persyaratan.php">Persyaratan</a></li>
                                <li class="nav-item active"><a class="nav-link" href="masuk.php">Masuk</a></li> 
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
                     <h3 style="color: black;margin-top: 30px;">Input Data User</h3>
                    <form class="form-group mt-5" method="post" action="aksi_registrasi.php?aksi=tambah" enctype="multipart/form-data">
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Nama
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                No BP
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="username" class="form-control" placeholder="No BP">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Password
                            </div>
                            <div class="col-md-5">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Level
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="level" class="form-control" placeholder="Level" value="Mahasiswa">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-2">
                                Email
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Telepon
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="telepon" class="form-control" placeholder="Telepon">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Photo
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
                    <?php
                        // break;
                        // case 'edit':
                        // $koneksi=mysqli_connect('localhost','root','','beasiswa');
                        // $ambil = mysqli_query($koneksi,"select * from user where username='$_GET[kode]'");
                        // $data = mysqli_fetch_array($ambil);


                    ?>
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