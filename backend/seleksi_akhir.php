<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Seleksi Akhir </h1>

<p><a href="laporanwawancara.php" class="btn btn-default"> + Cetak</a></p>

<!-- <p><a href="?p=data_diri&aksi=entri" class="btn btn-primary"> + Tambah data</a></p> -->
<table class="table table-condensed" id="seleksi_akhir">
  <thead>
  <tr>
    <th>No</th>
    <th>No BP</th>
    <th>Nama</th>
    <th>Aksi</th>
    <th>Total Nilai</th>
  </tr>
  </thead>
  
  <?php
  $koneksi=mysqli_connect("localhost","root","","beasiswa"); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa INNER JOIN wawancara ON data_mahasiswa.no_bp = wawancara.nobp_ 
    WHERE wawancara.status ='Lulus' ");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['no_bp'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td>
    <a href="aksi_data_diri.php?proses=hapus&kode=<?php echo $row['no_bp'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <?php
        $koneksi=mysqli_connect('localhost','root','','beasiswa');
        $ambil1=mysqli_query($koneksi,"SELECT total FROM wawancara WHERE nobp_= '$row[no_bp]'");
        $data1=mysqli_fetch_array($ambil1);
        if($data1>1){
     ?>
    <button href="?p=wawancara&aksi=detail&kode=<?php echo $row['no_bp'] ?>" class="btn btn-primary" disabled>Masukkan Nilai</button>

  <?php }else{?>
    <a href="?p=wawancara&aksi=detail&kode=<?php echo $row['no_bp'] ?>" class="btn btn-primary">Masukkan Nilai</a>

  <?php }?>
    <?php
      // }
      ?>
    </td>

  <td><?php echo $data1['total'] ?></td>

  </tr>
  <?php
  $no++;
  }
  ?>
  </tbody>
</table>

<?php
break;
case 'detail':
$koneksi=mysqli_connect('localhost','root','','beasiswa');
$ambil=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Masukkan Data Informasi</h1>
<form class="form-horizontal" action="aksi_wawancara.php?proses=tambah&kode=<?= $data['no_bp']?>" role="form" method="post">
  <?php
 
        
?>

<?php
$koneksi=mysqli_connect('localhost','root','','beasiswa');
$ambil=mysqli_query($koneksi,"SELECT * FROM wawancara WHERE nobp_='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Ekonomi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ekonomi" name="ekonomi" value="<?= $data['ekonomi']?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Akademik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="akademik" name="akademik" value="<?= $data['akademik']?>">
    </div>
  </div>

  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Non Akademik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="non_akademik" name="non_akademik" value="<?= $data['non_akademik']?>">
    </div>
  </div>

  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Keluarga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keluarga" name="keluarga" value="<?= $data['keluarga']?>">
    </div>
  </div>

  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Keseharian</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keseharian" name="keseharian" value="<?= $data['keseharian']?>">
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
}
?>

</div>
  </div>

</section>

