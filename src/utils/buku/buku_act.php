<?php
include "../../koneksi.php";

$judul_buku = $_POST['judul_buku'];
$isbn = $_POST['isbn'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

// Insert  
if (@$_POST) {
    $query = "INSERT INTO buku (judul_buku, isbn, pengarang, penerbit, tahun) VALUES ('$judul_buku', '$isbn', '$pengarang', '$penerbit', '$tahun')";
}

// if (@$_POST['id']) {
//     $id = $_POST['id'];
//     $status = 'kembali';
//     $query = "UPDATE transaksi SET
//                  anggota = '$idanggota', 
//                  buku = '$idbuku', 
//                  tanggal_pinjam = '$tanggal_pinjam', 
//                  status = '$status',
//                  tanggal_kembali = '$tanggal_kembali'
//                      WHERE id_transaksi = '$id'";
// }

if (@$_GET['id']) {
    $query = "DELETE FROM transaksi WHERE id_transaksi = " . @$_GET['id'];
}

$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: ./../../../buku");
}