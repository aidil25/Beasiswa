<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Admin Jadwal Seleksi </h1>

<p><a href="?p=admin_jadwalseleksi&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="admin_jadwalseleksi">
  <thead>
  <tr>
    <th>No</th>
    <th>Nama Seleksi</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th>Pengumuman</th>
    <th>Jenis Beasiswa</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  include ('koneksi.php'); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM admin_jadwalseleksi,jenis_beasiswa WHERE admin_jadwalseleksi.id_jenis_beasiswa=jenis_beasiswa.id_jenis_beasiswa");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['nama_seleksi'] ?></td>
    <td><?php echo $row['tanggal_mulai'] ?></td>
    <td><?php echo $row['tanggal_selesai'] ?></td>
    <td><?php echo $row['pengumuman'] ?></td>
    <td><?php echo $row['jenis_beasiswa'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td><a href="aksi_admin_jadwalseleksi.php?proses=hapus&kode=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=admin_jadwalseleksi&aksi=edit&kode=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
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
<h1>Masukkan Jadwal Seleksi</h1>
<form class="form-horizontal" role="form" action="aksi_admin_jadwalseleksi.php?proses=tambah" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Nama Seleksi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_seleksi" placeholder="Nama Seleksi" name="nama_seleksi">
    </div>
  </div>
 <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tanggal Mulai</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_mulai"  name="tanggal_mulai" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tanggal Selesai</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_selesai"  name="tanggal_selesai" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Pengumuman</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="pengumuman"  name="pengumuman" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jenis Beasiswa</label>
    <div class="col-sm-10">
      <select class="form-control" id="id_jenis_beasiswa" placeholder="jurusan" name="id_jenis_beasiswa">
    <?php 
    include ('koneksi.php');//koneksi ke mysql
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
$ambil=mysqli_query($koneksi,"SELECT * FROM admin_jadwalseleksi WHERE id='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Jadwal Seleksi</h1>
<form class="form-horizontal" role="form" action="aksi_admin_jadwalseleksi.php?proses=ubah&kode=<?= $data['id']?>" method="post">
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Nama Seleksi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_seleksi" placeholder="Nama Seleksi" name="nama_seleksi" value="<?= $data['nama_seleksi']?>">
    </div>
  </div>
 <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tanggal Mulai</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_mulai"  name="tanggal_mulai" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tanggal Selesai</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_selesai"  name="tanggal_selesai" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Pengumuman</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="pengumuman"  name="pengumuman" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Jenis Beasiswa</label>
    <div class="col-sm-10">
      <select class="form-control" id="id_jenis_beasiswa" placeholder="jurusan" name="id_jenis_beasiswa">
    <?php 
    include ('koneksi.php');//koneksi ke mysql
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