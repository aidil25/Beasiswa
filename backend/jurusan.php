<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Jurusan </h1>

<p><a href="?p=jurusan&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="jurusan">
  <thead>
  <tr>
    <th>No</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  include ('koneksi.php'); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM jurusan");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['nama_jurusan'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td>
      <a href="aksi_jurusan.php?proses=hapus&kode=<?php echo $row['id_jurusan'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=jurusan&aksi=edit&kode=<?php echo $row['id_jurusan'] ?>" class="btn btn-primary">Edit</a>
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
<h1>Masukkan Data Jurusan</h1>
<form class="form-horizontal" role="form" action="aksi_jurusan.php?proses=tambah" method="post">
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_jurusan" placeholder="Masukkan Jurusan" name="nama_jurusan">
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
$ambil=mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id_jurusan='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Konten Informasi</h1>
<form class="form-horizontal" role="form" action="aksi_jurusan.php?proses=ubah&kode=<?= $data['id_jurusan']?>" method="post">
   <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_jurusan" placeholder="Masukkan Jurusan" name="nama_jurusan" value="<?= $data['nama_jurusan']?>">
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