<?php
include "../../koneksi.php";

if (@$_POST) {
    $idanggota = $_POST['idanggota'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $foto = null;

    // validation for photo
    $foto = (@$_POST['foto_lama']) ?: '';
    if (@$_FILES['foto']['tmp_name']) {
        if (file_exists('public/' . $_POST['foto_lama'])) { // if file exist, then delete it
            unlink("public/" . $_POST['foto_lama']);
        }

        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $dir = "./../../../public";
        move_uploaded_file($tmp, $dir . "/" . $foto);
    }

    if (@$_POST['id']) {
        $id = @$_POST['id'];

        // query to update the data
        $query = "UPDATE anggota SET idanggota = '$idanggota', nama = '$nama', jeniskelamin = '$jeniskelamin', alamat = '$alamat', foto = '$foto' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
    } else {
        // if there is no id, it means data entry
        // insert data to "anggota" table
        $query = "INSERT INTO anggota (idanggota, nama, jeniskelamin, alamat, foto) VALUES ('$idanggota', '$nama', '$jeniskelamin', '$alamat', '$foto')";
        $result = mysqli_query($koneksi, $query);
    }
}

// delete
if (@$_GET['id']) {
    $query = "DELETE FROM anggota WHERE id = " . @$_GET['id'];
    $result = mysqli_query($koneksi, $query);
}

if ($result) {
    header("Location: ./../../../anggota");
}

?>