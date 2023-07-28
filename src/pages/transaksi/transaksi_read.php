<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/style/style.css" />
  </head>
  <body>
  <?php include_once "./src/components/NavBar.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h1>Daftar Transaksi</h1>
                <a href="transaksi/add" class="btn btn-primary mb-5 mt-4">Tambah Transaksi</a>
                <a href="transaksi_lap" class="btn btn-secondary mb-5 mt-4">Cetak Laporan</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Pinjam</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "./src/koneksi.php";

                    $query = "SELECT * FROM transaksi INNER JOIN buku ON buku.id_buku = transaksi.buku INNER JOIN anggota ON anggota.id = transaksi.anggota ORDER BY id_transaksi ASC";

                    $result = mysqli_query($koneksi, $query);

                    foreach ($result as $key => $row) {
                        ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row['judul_buku'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['tanggal_pinjam'] ?></td>
                            <td><?= $row['status'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="transaksi/edit?id=<?= $row['id_transaksi'] ?>" class="btn btn-warning">Edit</a>
                                    <button onclick="confirmToDelete(<?= $row['id_transaksi'] ?>)" class="btn btn-danger ms-1">Hapus</button>
                                </div>
                            </td>
                                
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
    function confirmToDelete(id) {
        if(confirm(`Apakah anda yakin ingin mengapus ${id}`)) {
            window.location = `./src/utils/transaksi/transaksi_act.php?id=${id}`
        }
    }
    </script>
  </body>
</html>