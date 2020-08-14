          <section class="content">
  <div class="box">
    <div class="box-body">
          <?php
            $page= isset($_GET['page'])?$_GET['page']:'list';
            switch($page){
                case 'list':
              ?>
                <h1>List User</h1>
                <p><a href="?p=user&page=entri" class="btn btn-primary"><i class=""></i>+ Tambah Data</a></p>
                <table class="table table-bordered text-center mt-3">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Photo</th>
                    <?php
                        if ($_SESSION['level']=='admin') {
                        ?>
                    <th>Aksi</th>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                        include ('koneksi.php');
                        $data = mysqli_query($koneksi,"select * from user");
                        $i =1;
                        while ($row=mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['level']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['telepon']?></td>
                        <td><img src="images/<?php echo $row['photo']?>" style="width: 80px;height: 100px;"></td>
                        <td>
                        <a href="aksi_user.php?aksi=hapus&kode=<?php echo $row['username']?>&foto=<?php echo$row['photo']?>" class="btn btn-danger pr-2 pl-2" >Hapus
                        <a href="?p=user&page=edit&kode=<?php echo $row['username']?>" class="btn btn-primary ml-2 pr-2 pl-2">Edit
                        </td>
                    </tr>
                    <?php $i++;}?>
                </table>
                <?php
                    break;
                    case 'entri':
                ?>
                    <h2>Input Data User</h2>
                    <form class="form-group mt-5" method="post" action="aksi_user.php?aksi=tambah" enctype="multipart/form-data">
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
                                Username
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="username" class="form-control" placeholder="Username">
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
                            <div class="col-md-10">
                                <select name="level" id="level">
                                    <option value="Admin">Admin</option>
                                    <option value="Penyeleksi" >Penyeleksi</option>
                                </select>
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
                                Telp
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="telp" class="form-control" placeholder="Telp">
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
                                <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
                                <input type="reset" name="btnReset" value="Reset" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                    <?php
                        break;
                        case 'edit':
                        include ('koneksi.php');
                        $ambil = mysqli_query($koneksi,"select * from user where username='$_GET[kode]'");
                        $data = mysqli_fetch_array($ambil);
                    ?>
                    <h2>Edit Data User</h2>
                    <form class="form-group mt-5" method="post" action="aksi_user.php?aksi=ubah&kode=<?php echo $data['username']?>" encrypte="multipart/form-data">
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Nama
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $data['nama']?>">
                            </div>
                        </div>
                         <div class="row mt-2">
                            <div class="col-md-2">
                                Username
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $data['username']?>">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Password
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="password" class="form-control" placeholder="Password" >
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Level
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="level" class="form-control" placeholder="Level" value="<?= $data['level']?>">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-2">
                                Email
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="<?= $data['email']?>">
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Telp
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="telp" class="form-control" placeholder="Telp" value="<?= $data['telp']?>">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Photo
                            </div>
                            <div class="col-md-5">
                                <input type="file" name="foto" class="form-control" >
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                &nbsp;
                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
                                <input type="reset" name="btnReset" value="Reset" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                <?php
                    break;
                    }
                ?>
                </div>
  </div>
  
</section>
