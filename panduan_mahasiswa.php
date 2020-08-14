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
                                <li class="nav-item active"><a class="nav-link" href="panduan_mahasiswa.php">Panduan</a></li>  
                                <li class="nav-item active"><a class="nav-link" href="daftar_beasiswa_mahasiswa.php">Daftar Beasiswa</a></li> 
                               <li class="nav-item dropdown"><a class="nav-link" href="jadwal_seleksi_mahasiswa.php">Jadwal Seleksi</a></li>  
                                <li class="nav-item dropdown"><a class="nav-link" href="data_mahasiswa.php">Pendaftaran</a></li> 
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
						<div class="">
                            <table class="table table-condensed" id="admin_panduan">
							<?php
                            include ('koneksi.php'); //koneksi ke mysql
                            $data=mysqli_query($koneksi,"SELECT * FROM admin_panduan");
                            while ($row=mysqli_fetch_array($data)){
                            ?>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2><?php echo $row['judul'] ?></h2>
                                <p class="excert">
                                    <?php echo $row['konten_panduan'] ?>
                                </p>
                            </div>
                        <?php }?>
                        </table>
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