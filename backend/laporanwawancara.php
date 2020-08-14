<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Politeknik Negeri Padang',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Nama Mahasiswa Yang Lulus Seleksi Wawancara ',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0);
$pdf->Cell(25,6,'No BP',1,0);
$pdf->Cell(45,6,'NAMA',1,0);
$pdf->Cell(45,6,'JURUSAN',1,0);
$pdf->Cell(70,6,'PRODI',1,1);

$pdf->SetFont('Arial','',10);
$no=1;
include ('koneksi.php');
$data=mysqli_query($koneksi,"SELECT * FROM wawancara INNER JOIN data_mahasiswa ON wawancara.nobp_ = data_mahasiswa.no_bp");
while ($row = mysqli_fetch_array($data)){
   $pdf->Cell(10,6,$no,1,0);
    $pdf->Cell(25,6,$row['nobp_'],1,0);
    $pdf->Cell(45,6,$row['nama'],1,0);
	$pdf->Cell(45,6,$row['jurusan'],1,0);
	$pdf->Cell(70,6,$row['prodi'],1,1);
	$no++;
}

$pdf->Output();
?>