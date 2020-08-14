<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Jenis Beasiswa </h1>

<p><a href="?p=jenis_beasiswa&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="jenis_beasiswa">
  <thead>
  <tr>
    <th>No</th>
    <th>Jenis Beasiswa</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  include ('koneksi.php'); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM jenis_beasiswa");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['jenis_beasiswa'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td><a href="aksi_jenis_beasiswa.php?proses=hapus&kode=<?php echo $row['id_jenis_beasiswa'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=jenis_beasiswa&aksi=edit&kode=<?php echo $row['id_jenis_beasiswa'] ?>" class="btn btn-primary">Edit</a>
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
<h1>Masukkan Jenis Beasiswa</h1>
<form class="form-horizontal" role="form" action="aksi_jenis_beasiswa.php?proses=tambah" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jenis Beasiswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jenis_beasiswa" placeholder="Jenis Beasiswa" name="jenis_beasiswa">
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
$ambil=mysqli_query($koneksi,"SELECT * FROM jenis_beasiswa WHERE id_jenis_beasiswa='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Jenis Beasiswa</h1>
<form class="form-horizontal" role="form" action="aksi_jenis_beasiswa.php?proses=ubah&kode=<?= $data['id_jenis_beasiswa']?>" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jenis Beasiswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= $data['jenis_beasiswa']?>">
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