<?php

require('fpdf/fpdf.php'); // memanggil library FPDF

$pdf = new FPDF('l','mm','A5'); // intance object dan memberikan pengaturan halaman PDF
$pdf->AddPage(); // membuat halaman baru
$pdf->SetFont('Arial','B',16); // setting jenis font menjadi arial, bold, ukuran 12 yang akan digunakan
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C'); // mencetak string 
$pdf->SetFont('Arial','B',12); // setting jenis font menjadi arial, bold, ukuran 12 yang akan digunakan
$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');

$pdf->Cell(10,7,'',0,1); // Memberikan space kebawah agar tidak terlalu rapat

$pdf->SetFont('Arial','B',10); // setting jenis font menjadi arial, bold, ukuran 10 yang akan digunakan
$pdf->Cell(20,6,'NIM',1,0); // untuk membuat cell 20x6 mm dan tulisan NIM ada di sebelah kanan dan menampilkan pembatas
$pdf->Cell(50,6,'NAMA MAHASISWA',1,0); // untuk membuat cell 50x6 mm dan tulisan NAMA MAHASISWA ada di sebelah kanan dan menampilkan pembatas
$pdf->Cell(25,6,'J KEL',1,0); // untuk membuat cell 25x6 mm dan tulisan J KEL ada di sebelah kanan dan menampilkan pembatas
$pdf->Cell(50,6,'ALAMAT',1,0); // untuk membuat cell 50x6 mm dan tulisan ALAMAT ada di sebelah kanan dan menampilkan pembatas
$pdf->Cell(30,6,'TANGGAL LHR',1,1); // untuk membuat cell 30x6 mm dan tulisan TANGGAL LHR ada di sebelah kanan dan menampilkan pembatas

$pdf->SetFont('Arial','',10); // setting jenis font menjadi arial, ukuran 12 yang akan digunakan

include 'koneksi.php';
$mahasiswa = mysqli_query($con, "select * from mahasiswa"); // untuk menampilkan semua data yang ada di tabel mahasiswa
while ($row = mysqli_fetch_array($mahasiswa)){
 $pdf->Cell(20,6,$row['nim'],1,0); // untuk membuat cell 20x6 mm dan menampilkan data yang ada di filed nim dan teks di sebelah kanan dan menampilkan pembatas
 $pdf->Cell(50,6,$row['nama'],1,0); // untuk membuat cell 50x6 mm dan menampilkan data yang ada di filed nama dan teks di sebelah kanan dan menampilkan pembatas
 $pdf->Cell(25,6,$row['jkel'],1,0); // untuk membuat cell 25x6 mm dan menampilkan data yang ada di filed jkel dan teks di sebelah kanan dan menampilkan pembatas
 $pdf->Cell(50,6,$row['alamat'],1,0); // untuk membuat cell 50x6 mm dan menampilkan data yang ada di filed alamat dan teks di sebelah kanan dan menampilkan pembatas
 $pdf->Cell(30,6,$row['tgllhr'],1,1); // untuk membuat cell 30x6 mm dan menampilkan data yang ada di filed tgllhr dan teks di sebelah kanan dan menampilkan pembatas
}
$pdf->Output();
?>