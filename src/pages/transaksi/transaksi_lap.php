<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'Data Transaksi');

$activeWorksheet->setCellValue('A3', 'No');
$activeWorksheet->setCellValue('B3', 'Judul Buku');
$activeWorksheet->setCellValue('C3', 'Nama Anggota');
$activeWorksheet->setCellValue('D3', 'Tanggal Pinjam');
$activeWorksheet->setCellValue('E3', 'Tanggal Kembali');
$activeWorksheet->setCellValue('F3', 'Status');

include_once './src/koneksi.php';

$query = "SELECT * FROM transaksi
    JOIN buku ON buku.id_buku = transaksi.buku
    JOIN anggota ON transaksi.anggota = anggota.id";

$data_transaksi = mysqli_query($koneksi, $query);

$baris = 4;
$no = 1;
foreach ($data_transaksi as $key => $value) {
    # code...
    $activeWorksheet->setCellValue('A' . $baris, $no);
    $activeWorksheet->setCellValue('B' . $baris, $value['judul_buku']);
    $activeWorksheet->setCellValue('C' . $baris, $value['nama']);
    $activeWorksheet->setCellValue('D' . $baris, $value['tanggal_pinjam']);
    $activeWorksheet->setCellValue('E' . $baris, $value['tanggal_kembali']);
    $activeWorksheet->setCellValue('F' . $baris, $value['status']);
    $baris++;
    $no++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('laporan-transaksi.xlsx');
header('Location: laporan-transaksi.xlsx');