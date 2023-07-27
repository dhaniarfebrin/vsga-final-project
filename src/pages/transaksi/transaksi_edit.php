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
    <div class="container mt-5">
        <h1 class="mb-4">Ubah Transaksi</h1>
        
        <?php

        include_once './src/koneksi.php';

        $query_anggota = "SELECT * FROM anggota";
        $data_anggota = mysqli_query($koneksi, $query_anggota);

        $query_buku = "SELECT * FROM buku";
        $data_buku = mysqli_query($koneksi, $query_buku);

        if (@$_GET["id"]) {
            $id = $_GET["id"];
            $query_transaksi = "SELECT * FROM transaksi WHERE id_transaksi = " . $id;
            $data_transaksi = mysqli_query($koneksi, $query_transaksi)->fetch_array();
        }

        ?>

        <form action="./../src/utils/transaksi/transaksi_act.php" method="POST">
            <input type="hidden" value="<?= $data_transaksi["id_transaksi"] ?>" name="id">
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Anggota</label>
                <div class="col-lg-3">

                    <select name="anggota" id="anggota" class="form-select">
                        <?php
                        foreach ($data_anggota as $key => $value) {

                            ?>
                            <option value="<?= $value["id"] ?>" <?= ($value["id"] == $data_transaksi["anggota"]) ? "selected" : "" ?>><?= $value['nama']; ?> [<?= $value["idanggota"]; ?>]</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Buku</label>
                <div class="col-lg-3">

                    <select name="buku" id="buku" class="form-select">
                        <?php
                        foreach ($data_buku as $key => $value) {

                            ?>
                            <option value="<?= $value["id_buku"] ?>" <?= ($value["id_buku"] == $data_transaksi["buku"]) ? "selected" : "" ?>><?= $value['judul_buku']; ?> [<?= $value["isbn"]; ?>]</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-lg-3">
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="<?= $data_transaksi["tanggal_pinjam"] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Tanggal Kembali</label>
                <div class="col-lg-3">
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="<?= $data_transaksi["tanggal_kembali"] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <button class="btn btn-primary">Kirim</button>
                    <a href="../transaksi">Kembali</a>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
  </body>
</html>