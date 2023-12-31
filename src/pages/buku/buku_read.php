<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>
    <?php include_once "./src/components/NavBar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h1>Daftar Buku</h1>
                <a href="buku/add" class="btn btn-primary mb-5 mt-4">Tambah Buku</a>
                <!-- <a href="#" class="btn btn-secondary mb-5 mt-4">Cetak Laporan</a> -->
            </div>
        </div>
        <form method="POST" class="row mb-4">
            <div class="col-lg-4 offset-lg-6">
                <input type="text" name="pencarian" class="form-control" />
            </div>
            <div class="col-lg-2">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>
        <div class="row">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>ISBN</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "./src/koneksi.php";

                    $batas = 5;
                    extract($_GET);

                    if (empty($hal)) {
                        $posisi = 0;
                        $hal = 1;
                        $no = 1;
                    } else {
                        $posisi = ($hal - 1) * $batas;
                        $no = $posisi + 1;
                    }

                    if (@$_POST['pencarian']) {
                        $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
                        if ($pencarian != "") {
                            $query = "SELECT * FROM buku WHERE
                                        judul_buku LIKE '%$pencarian%'
                                        OR isbn like '%$pencarian%'
                                        OR pengarang like '%$pencarian%'
                                        OR penerbit like '%$pencarian%'
                                        OR tahun like '%$pencarian%'";
                            $queryJml = $query;
                        } else {
                            $query = "SELECT * FROM buku LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM buku";
                        }
                    } else {
                        $query = "SELECT * FROM buku LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM buku";
                    }

                    $result = mysqli_query($koneksi, $query);

                    foreach ($result as $key => $row) {
                        ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row['judul_buku'] ?></td>
                            <td><?= $row['isbn'] ?></td>
                            <td><?= $row['pengarang'] ?></td>
                            <td><?= $row['penerbit'] ?></td>
                            <td><?= $row['tahun'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="buku/edit?id=<?= $row['id_buku'] ?>" class="btn btn-warning">Edit</a>
                                    <button onclick="confirmToDelete(<?= $row['id_buku'] ?>)" class="btn btn-danger ms-1">Hapus</button>
                                </div>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="col">
                <?php
                    $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
                    echo '<p>Jumlah data : ' . $jml . '</p>';
                ?>
            </div>
            <div class="col">
                <nav class="float-end" aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        $jml_hal = ceil($jml / $batas);
                        for ($i = 1; $i <= $jml_hal; $i++) {
                            if ($i != $hal) {
                                ?>
                                <li class="page-item"><a class="page-link" href="buku?hal=<?= $i ?>"><?= $i ?></a></li>
                            <?php
                            } else {
                                ?>
                                <li class="page-item"><a class="page-link disabled"><?= $i ?></a></li>
                                <?php
                                ?>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        function confirmToDelete(id) {
            if (confirm(`Apakah anda yakin ingin mengapus ${id}`)) {
                window.location = `./src/utils/buku/buku_act.php?id=${id}`
            }
        }
    </script>
</body>

</html>