<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Admin Informasi </h1>

<p><a href="?p=prodi&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="prodi">
  <thead>
  <tr>
    <th>No</th>
    <th>Prodi</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  include ('koneksi.php'); //koneksi ke mysql
  $data=mysqli_query($koneksi,"select * from prodi,jurusan where prodi.id_jurusan=jurusan.id");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['nama_prodi'] ?></td>
    <td><?php echo $row['nama_jurusan'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td>
      <a href="aksi_prodi.php?proses=hapus&kode=<?php echo $row['id_prodi'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=prodi&aksi=edit&kode=<?php echo $row['id_prodi'] ?>" class="btn btn-primary">Edit</a>
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
<form class="form-horizontal" role="form" action="aksi_prodi.php?proses=tambah" method="post">
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Prodi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_prodi" placeholder="Masukkan Prodi" name="nama_prodi">
    </div>
  </div>
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
    <div class="col-sm-10">
      <select class="form-control" id="id_jurusan" placeholder="Masukkan Jurusan" name="id_jurusan">
    <?php 
    $koneksi=mysqli_connect("localhost","root","","beasiswa"); //koneksi ke mysql
    $data=mysqli_query($koneksi,"SELECT * FROM jurusan");
    while ($row=mysqli_fetch_array($data)) {
      echo "<option value=$row[id_jurusan]>$row[nama_jurusan]</option>";
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

$koneksi=mysqli_connect('localhost','root','','beasiswa');
$ambil=mysqli_query($koneksi,"SELECT * FROM prodi WHERE id_prodi='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Konten Informasi</h1>
<form class="form-horizontal" role="form" action="aksi_prodi.php?proses=ubah&kode=<?= $data['id_prodi']?>" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Prodi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_prodi" placeholder="Masukkan Prodi" name="nama_prodi" value="<?= $data['nama_prodi']?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
    <div class="col-sm-10">
      <select class="form-control" id="id_jurusan" placeholder="Masukkan Jurusan" name="id_jurusan">
    <?php 
    $koneksi=mysqli_connect("localhost","root","","beasiswa"); //koneksi ke mysql
    $data1=mysqli_query($koneksi,"SELECT * FROM jurusan");
    while ($row=mysqli_fetch_array($data1)) {
      echo "<option value=$row[id_jurusan]>$row[nama_jurusan]</option>";
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