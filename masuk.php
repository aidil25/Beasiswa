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
        <section class="home_banner_area">
            <div class="box_1620">
                <div class="banner_inner d-flex align-items-center">
                    <div class="container">
                        <div class="banner_content text-center">
                            <div class="login-box">
        <form class="" role="form" action="" method="post">
        <h1 style="color: black;">Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true" style="color: black;"></i>
            <input style="" type="text" placeholder="Username" name="username" value="">
        </div>

        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true" style="color: black;"></i>
            <input type="password" placeholder="Password" name="password" value="">
        </div>

        <input class="btn" type="submit" name="submit" value="Sign in">
        <h6>silahkan registrasi bagi yang belum punya <a href="registrasi.php">akun<a></h6>
        </form>
        
        <?php
        include'koneksi.php';
        if (isset($_POST['submit']))
        {
            $user=$_POST['username'];
            $pass=md5($_POST['password']);
            
            $login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
            $cek=mysqli_num_rows($login);
            $data=mysqli_fetch_array($login);
            if ($cek>=1)
            {
                session_start();
                echo "<script>window.location.href='index.php';</script>";
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                header('location:index_mahasiswa.php');
            }
            else 
            {
                echo "<script>alert('username dan password incorrect')</script>";
            }
        }
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