<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Data Admin Informasi </h1>

<p><a href="?p=data_keluarga&aksi=entri" class="btn btn-primary"> + Tambah data</a></p>
<table class="table table-condensed" id="data_keluarga">
  <thead>
  <tr>
    <th>No</th>
    <th>Nama Ayah</th>
    <th>Status</th>
    <th>Pendidikan</th>
    <th>Pekerjaan</th>
    <th>Penghasilan</th>
    <th>Nama Ibu</th>
    <th>Status</th>
    <th>Pendidikan</th>
    <th>Pekerjaan</th>
    <th>Penghasilan</th>
    <th>Nama Wali</th>
    <th>Status</th>
    <th>Pendidikan</th>
    <th>Pekerjaan</th>
    <th>Penghasilan</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  $koneksi=mysqli_connect("localhost","root","","beasiswa"); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa");
  $no=1;
  while ($row=mysqli_fetch_array($data)){
  ?>
  <tbody>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['nama_ayah'] ?></td>
    <td><?php echo $row['status_ayah'] ?></td>
    <td><?php echo $row['pendidikan_ayah'] ?></td>
    <td><?php echo $row['pekerjaan_ayah'] ?></td>
    <td><?php echo $row['penghasilan_ayah'] ?></td>
    <td><?php echo $row['nama_ibu'] ?></td>
    <td><?php echo $row['status_ibu'] ?></td>
    <td><?php echo $row['pendidikan_ibu'] ?></td>
    <td><?php echo $row['pekerjaan_ibu'] ?></td>
    <td><?php echo $row['penghasilan_ibu'] ?></td>
    <td><?php echo $row['nama_wali'] ?></td>
    <td><?php echo $row['status_wali'] ?></td>
    <td><?php echo $row['pendidikan_wali'] ?></td>
    <td><?php echo $row['pekerjaan_wali'] ?></td>
    <td><?php echo $row['penghasilan_wali'] ?></td>
    <td><?php echo $row['alamat'] ?></td>
    <?php
            // if ($_SESSION['level']=='admin') {
            ?>
    <td>
      <a href="aksi_data_keluarga.php?proses=hapus&kode=<?php echo $row['no_bp'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</a>
    <a href="?p=data_keluarga&aksi=edit&kode=<?php echo $row['no_bp'] ?>" class="btn btn-primary">Edit</a>
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
<form class="form-horizontal" role="form" action="aksi_data_keluarga.php?proses=tambah" method="post">
 
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Data Ayah</label>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Status
          </div>
          <div class="col-md-5">
            <input type="radio" name="status_ayah" value="Hidup">Hidup
            <input type="radio" name="status_ayah" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pendidikan</label>
    <select>
      <option value="">Pendidikan Ayah</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah">
    </div>
  </div>
  
  

  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Data Ibu</label>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Status
          </div>
          <div class="col-md-5">
            <input type="radio" name="status_ibu" value="Hidup">Hidup
            <input type="radio" name="status_ibu" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pendidikan</label>
    <select>
      <option value="">Pendidikan Ibu</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Masukkan Penghasilan Ibu">
    </div>
  </div>



  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Data Wali</label>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Masukkan Nama Wali">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Status
          </div>
          <div class="col-md-5">
            <input type="radio" name="status_wali" value="Hidup">Hidup
            <input type="radio" name="status_wali" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pendidikan</label>
    <select>
      <option value="">Pendidikan Wali</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali">
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Masukkan Penghasilan Wali">
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
$ambil=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Konten Informasi</h1>
<form class="form-horizontal" role="form" action="aksi_data_keluarga.php?proses=ubah&kode=<?= $data['no_bp']?>" method="post">

  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Data Ayah</label>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama Ayah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Status
          </div>
          <div class="col-md-5">
            <input type="radio" name="status_ayah" value="Hidup">Hidup
            <input type="radio" name="status_ayah" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pendidikan</label>
    <select>
      <option value="">Pendidikan Ayah</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah">
    </div>
  </div>
  
  

  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Data Ibu</label>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama Ibu</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Status
          </div>
          <div class="col-md-5">
            <input type="radio" name="status_ibu" value="Hidup">Hidup
            <input type="radio" name="status_ibu" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pendidikan</label>
    <select>
      <option value="">Pendidikan Ibu</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Masukkan Penghasilan Ibu">
    </div>
  </div>



  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Data Wali</label>
  </div>
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama Wali</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Masukkan Nama Wali">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Status
          </div>
          <div class="col-md-5">
            <input type="radio" name="status_wali" value="Hidup">Hidup
            <input type="radio" name="status_wali" value="Meninggal">Meninggal
          </div>
        </div>
    <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pendidikan</label>
    <select>
      <option value="">Pendidikan Wali</option>
      <option value="SD">SD Sederajat</option>
      <option value="SMP">SMP Sederajat</option>
      <option value="SMA">SMA Sederajat</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali">
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Penghasilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Masukkan Penghasilan Wali">
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