<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Admin Informasi </h1>

<p><a href="?p=admin_informasi&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="admin_informasi">
  <thead>
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Admin Informasi</th>
    <th>Jenis Beasiswa</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  include ('koneksi.php'); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM admin_informasi,jenis_beasiswa WHERE admin_informasi.id_jenis_beasiswa=jenis_beasiswa.id_jenis_beasiswa");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['judul'] ?></td>
    <td><?php echo $row['konten_informasi'] ?></td>
    <td><?php echo $row['jenis_beasiswa'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td>
      <a href="aksi_admin_informasi.php?proses=hapus&kode=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=admin_informasi&aksi=edit&kode=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
    <?php
      // }
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
<h1>Masukkan Data Informasi</h1>
<form class="form-horizontal" role="form" action="aksi_admin_informasi.php?proses=tambah" method="post">
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jenisbarang" placeholder="Judul" name="judul">
    </div>
  </div>
  
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Konten Informasi</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="keterangan" name="konten_informasi" rows="5" cols="35"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jenis Beasiswa</label>
    <div class="col-sm-10">
      <select class="form-control" id="id_jenis_beasiswa" placeholder="jurusan" name="id_jenis_beasiswa">
    <?php 
    include ('koneksi.php'); //koneksi ke mysql
    $data=mysqli_query($koneksi,"SELECT * FROM jenis_beasiswa");
    while ($row=mysqli_fetch_array($data)) {
      echo "<option value=$row[id_jenis_beasiswa]>$row[jenis_beasiswa]</option>";
    }
    ?>
    </select>
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

include ('koneksi.php');
$ambil=mysqli_query($koneksi,"SELECT * FROM admin_informasi WHERE id='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Konten Informasi</h1>
<form class="form-horizontal" role="form" action="aksi_admin_informasi.php?proses=ubah&kode=<?= $data['id']?>" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $data['judul']?>">
    </div>
  </div>
  
 <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Konten Informasi</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="jurusan" name="konten_informasi" rows="5" cols="35"><?= $data['konten_informasi'] ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jenis Beasiswa</label>
    <div class="col-sm-10">
      <select class="form-control" id="id_jenis_beasiswa" placeholder="jurusan" name="id_jenis_beasiswa">
    <?php 
    include ('koneksi.php'); //koneksi ke mysql
    $data1=mysqli_query($koneksi,"SELECT * FROM jenis_beasiswa");
    while ($row=mysqli_fetch_array($data1)) {
      echo "<option value=$row[id_jenis_beasiswa]>$row[jenis_beasiswa]</option>";
    }
    ?>
    </select>
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