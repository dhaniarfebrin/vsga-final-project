<?php
include "../../koneksi.php";

$judul_buku = $_POST['judul_buku'];
$isbn = $_POST['isbn'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];


if (@$_POST['id']) {
    $id = $_POST['id'];
    $query = "UPDATE buku SET
                 judul_buku = '$judul_buku', 
                 isbn = '$isbn', 
                 pengarang = '$pengarang', 
                 penerbit = '$penerbit',
                 tahun = '$tahun'
                     WHERE id_buku = '$id'";
} else if (@$_POST) {
    $query = "INSERT INTO buku (judul_buku, isbn, pengarang, penerbit, tahun) VALUES ('$judul_buku', '$isbn', '$pengarang', '$penerbit', '$tahun')";
}


if (@$_GET['id']) {
    $query = "DELETE FROM buku WHERE id_buku = " . @$_GET['id'];
}

$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: ./../../../buku");
}