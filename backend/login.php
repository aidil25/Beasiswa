
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="login-box">
		<form class="" role="form" action="" method="post">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="username" value="">
        </div>

        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" value="">
        </div>


        <!-- <input class="btn" type="submit" name="submit" value="Sign in"> -->

        <button class="btn" name="submit">LOGIN</button>
		</form>
		
		
    </div>

</body>

<?php
		include'koneksi.php';
		if (isset($_POST['submit'])){
			$user=isset($_POST['username'])?$_POST['username']:"";
			// $pass=$_POST['password'];

			$pass=isset($_POST['password'])?md5($_POST['password']):"";
			
			$login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
			$cek=mysqli_num_rows($login);
			
			if ($cek==1)
			{
				session_start();
				$data=mysqli_fetch_array($login);
				$_SESSION['user']=$data['username'];
				$_SESSION['level']=$data['level'];
				$_SESSION['foto']=$data['photo'];
				if($_SESSION['level']=='Admin'){
					header('location:index.php');
				}else if($_SESSION['level']=='Penyeleksi'){
					// echo "<script>window.alert('PENYELEKSI!')</script>";
					header("location:index_penyeleksi.php");
				}
				
			}echo "<script>window.alert('Password Anda Salah')</script>";
				}
		?>
</html>