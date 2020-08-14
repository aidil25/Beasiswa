<section class="content">
  <div class="box">
    <div class="box-body">
      
    
<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch($aksi) {
case 'list' :
?>
<h1>Seleksi Administrasi </h1>

<!-- <p><a href="?p=data_diri&aksi=entri" class="btn btn-primary"> + Tambah data</a></p> -->
<table class="table table-condensed" id="data_mahasiswa">
  <thead>
  <tr>
    <th>No</th>
    <th>No BP</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>
  </thead>
  
  <?php
  include ('koneksi.php'); //koneksi ke mysql
  $data=mysqli_query($koneksi,"SELECT * FROM administrasi_data INNER JOIN data_mahasiswa ON administrasi_data.nobp = data_mahasiswa.no_bp");
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
    <a href="?p=data_mahasiswa&aksi=detail&kode=<?php echo $row['no_bp'] ?>" class="btn btn-primary">Detail</a>
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
<form class="form-horizontal" role="form" action="aksi_data_diri.php?proses=tambah" method="post">
  
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">No BP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_bp" placeholder="Masukkan No BP" name="no_bp">
    </div>
  </div>
  
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tanggal Lahir</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_lahir"  name="tanggal_lahir" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Jenis Kelamin
          </div>
          <div class="col-md-5">
            <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
            <input type="radio" name="jenis_kelamin" value="P">Perempuan
          </div>
        </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Agama
          </div>
          <div class="col-md-5">
            <input type="radio" name="agama" value="Islam">Islam
            <input type="radio" name="agama" value="Katholik">Katholik
            <input type="radio" name="agama" value="Protestan">Protestan
            <input type="radio" name="agama" value="Budha">Budha
            <input type="radio" name="agama" value="Hindu">Hindu
          </div>
        </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">No Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_telepon" placeholder="Masukkan No Telepon" name="no_telepon">
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" rows="5" cols="35">
      </textarea>
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
$ambil=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Edit Konten Informasi</h1>
<form class="form-horizontal" role="form" action="aksi_data_diri.php?proses=ubah&kode=<?= $data['no_bp']?>" method="post">

  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">No BP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_bp" placeholder="Masukkan No BP" name="no_bp" value="<?= $data['no_bp']?>">
    </div>
  </div>
  
 <div class="form-group">
    <label for="keterangan" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <select class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $data['nama']?>"></select>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <select class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="<?= $data['tempat_lahir']?>">
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Tanggal Lahir</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="tanggal_lahir"  name="tanggal_lahir" value="<?= date("ymd")?>">
    </div>
  </div>
  <div class="row mt-2">
          <div class="col-md-2">
            Jenis Kelamin
          </div>
          <div class="col-md-5">
            <input type="radio" name="jenis_kelamin" value="L" <?php echo ($data['jenis_kelamin']=='L')? 'checked':''?>>Laki-Laki
            <input type="radio" name="jenis_kelamin" value="P" <?php echo ($data['jenis_kelamin']=='L')? 'checked':''?>>Perempuan
          </div>
        </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Agama</label>
    <div class="col-sm-10">
      <select class="form-control" id="agama" placeholder="Masukkan Agama" name="agama" value="<?= $data['agama']?>">
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <select class="form-control" id="email" placeholder="Masukkan Email" name="email" value="<?= $data['email']?>">
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">No Telepon</label>
    <div class="col-sm-10">
      <select class="form-control" id="no_telepon" placeholder="Masukkan No Telepon" name="no_telepon" value="<?= $data['no_telepon']?>">
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" rows="5" cols="35" value="<?= $data['alamat']?>">
      </textarea>
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
?>
</div>
  </div>
  

<?php
break;
case 'detail':

include ('koneksi.php');
$ambil=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE no_bp='$_GET[kode]'");
$data=mysqli_fetch_array($ambil);
?>
<h1>Data Mahasiswa</h1>
<form class="form-horizontal" role="form" action="aksi_data_mahasiswa.php?proses=ubah&kode=<?=$data['no_bp']?>" method="post">

   <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;" >Nama</label>
    <div class="col-sm-10">
      <?= $data['nama']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Tempat Lahir</label>
    <div class="col-sm-10">
      <?= $data['tempat_lahir']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Tanggal Lahir</label>
    <div class="col-sm-4">
      <?= $data['tanggal_lahir']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Jenis Kelamin</label>
    <div class="col-sm-10">
      <?= $data['jenis_kelamin']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Agama</label>
    <div class="col-sm-10">
      <?= $data['agama']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Email</label>
    <div class="col-sm-10">
      <?= $data['email']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">No Telepon</label>
    <div class="col-sm-10">
      <?= $data['no_telepon']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="jurusan" class="col-sm-2 control-label" style="text-align: left;">Alamat</label>
    <div class="col-sm-10">
      <?= $data['alamat']?>
    </div>
  </div>

 <div class="row mt-2">
    <label for="keterangan" class="col-md-2 control-label" style="text-align: left;">Nama Ayah</label>
    <div class="col-sm-10">
      <?= $data['nama_ayah']?>
    </div>
  </div>
  <div class="row mt-2">
      <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Status</label>
      <div class="col-sm-10">
        <?= $data['status_ayah']?>
      </div>
  </div>
    <div class="row mt-2">
      <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pendidikan</label>
      <div class="col-sm-10">
        <?= $data['pendidikan_ayah']?>
      </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pekerjaan</label>
    <div class="col-sm-10">
      <?= $data['pekerjaan_ayah']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Penghasilan</label>
    <div class="col-sm-10">
      <?= $data['penghasilan_ayah']?>
    </div>
  </div>
  
 <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Nama Ibu</label>
    <div class="col-sm-10">
      <?= $data['nama_ibu']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Status</label>
    <div class="col-sm-10">
      <?= $data['status_ibu']?>
    </div>
  </div>
    <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pendidikan</label>
     <div class="col-sm-10">
    <?= $data['pendidikan_ibu']?>
  </div>
  </div>

  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Pekerjaan</label>
    <div class="col-sm-10">
      <?= $data['pekerjaan_ibu']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Penghasilan</label>
    <div class="col-sm-10">
      <?= $data['penghasilan_ibu']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Jumlah Tanggungan</label>
    <div class="col-sm-10">
      <?= $data['jumlah_tanggungan']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Jurusan</label>
    <div class="col-sm-10">
      <?= $data['jurusan']?>
      </div>
  </div>
  
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label"style="text-align: left;">Prodi</label>
    <div class="col-sm-10">
    <?= $data['prodi']?>
  </div>
  </div>

    <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">semester</label>
    <div class="col-sm-10">
      <?= $data['semester']?>
    </div>
  </div>

  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">IPK</label>
    <div class="col-sm-10">
      <?= $data['ipk']?>
    </div>
  </div>
  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label" style="text-align: left;">Sekolah Asal</label>
    <div class="col-sm-10">
      <?= $data['sekolah_asal']?>
    </div>
  </div>

  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label"style="text-align: left;">Nilai Ijazah</label>
    <div class="col-sm-10">
      <?= $data['nilai_ijazah']?>
    </div>
  </div>


  <div class="row mt-2">
    <label for="keterangan" class="col-sm-2 control-label"style="text-align: left;">Surat Keterangan Tidak Mampu</label>
    <div class="col-sm-10">

                               <img style="width:80%; height:80%;" src="images/<?php echo $data['surat_tidak_mampu']?>">
                               
                            </div>
                        </div>




 
  <div class="row mt-2">
                            <div class="col-md-2">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <input style="color: black;" type="submit"  name="lulus" value="Lulus" class="btn btn-primary">
                                <input style="color: black;" type="submit" name="tidak" value="Tidak Lulus" class="btn btn-danger">
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