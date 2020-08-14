<?php
   include ('koneksi.php');
   $token=$_GET['t'];
   $sql_cek=mysqli_query($koneksi,"SELECT * FROM user WHERE hash='".$token."' and aktif='0'");
   $row=mysqli_fetch_array($sql_cek);
   if ($row>0) {
    //update data users aktif
    mysqli_query($koneksi,"UPDATE user SET aktif='1' WHERE hash='".$token."' and aktif='0'");
    echo '<div class="alert alert-success">
          Akun anda sudah aktif, silahkan <a href="../masuk.php">Login</a>
          </div>';
    echo
    "<script>swal('Mantap dijiwa!')</script>";
   }else{
          //data tidak di temukan
    echo '<div class="alert alert-warning">
          Invalid Token!
          </div>';
    }
 ?>