<h3 style="color: black;margin-top: 30px;">Input Data User</h3>
                    <form class="form-group mt-5" method="post" action="aksi_user.php?aksi=ubah&kode=<?php echo $data['username']?>" enctype="multipart/form-data">
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
                                NIP
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="username" class="form-control" placeholder="No BP" value="<?= $data['username']?>">  
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Password
                            </div>
                            <div class="col-md-5">
                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?= md5('$_POST[password]')?>">
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Level
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="level" class="form-control" placeholder="Level" value="Mahasiswa" value="<?= $data['level']?>">
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
                                Telepon
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?= $data['telepon']?>">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                Photo
                            </div>
                            <div class="col-md-5">
                                <input type="file" name="photo" class="form-control"  >
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