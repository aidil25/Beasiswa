<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Admin Panduan </h1>

<p><a href="?p=aidil&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="admin_panduan">
  <thead>
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Konten Panduan</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  $koneksi=mysqli_connect("localhost","root","","beasiswa"); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM admin_panduan");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['judul'] ?></td>
    <td><?php echo $row['konten_panduan'] ?></td>
    <?php
            if ($_SESSION['level']=='admin') {
            ?>
    <td><a href="aksi_admin_panduan.php?proses=hapus&kode=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=admin_panduan&aksi=edit&kode=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
    <?php
      }
      ?>
    </td>
  </tr>
  <?php
  $no++;
  }
  ?>
  </tbody>
</table>

<?php
break;
case 'entri':
?>
<h1>Masukkan Data Panduan</h1>
<form class="form-horizontal" role="form" action="aksi_admin_panduan.php?proses=tambah" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul">
    </div>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Konten Informasi</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="konten_panduan" name="konten_panduan" rows="5" cols="35"></textarea>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

<?php
break;
case 'edit':

$koneksi=mysqli_connect('localhost','root','','beasiswa');
$ambil=mysqli_query($koneksi,"SELECT * FROM admin_panduan WHERE id='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Konten Panduan</h1>
<form class="form-horizontal" role="form" action="aksi_admin_panduan.php?proses=ubah&kode=<?= $data['id']?>" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $data['judul']?>">
    </div>
  </div>
 <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Konten Panduan</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="konten_panduan" name="konten_panduan" rows="5" cols="35"><?= $data['konten_panduan'] ?></textarea>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <Input type="submit" name="submit" class="btn btn-primary">
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