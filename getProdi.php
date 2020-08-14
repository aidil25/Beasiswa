<?php
include ('koneksi.php');
	$data = mysqli_query($koneksi,"select * from prodi where id_jurusan = '$_GET[jurusan]'");
	while ($row=mysqli_fetch_array($data)) {
		echo "<option value= '$row[id_prodi]'>".$row['nama_prodi']."</option>";
	}
?>