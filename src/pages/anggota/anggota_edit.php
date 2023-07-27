<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Anggota - Simperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/style/style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Edit Data Anggota</h1>

    <?php
    include_once './src/koneksi.php';

    if (@$_GET['id']) {
        # code...
        $id = @$_GET['id'];

        $query = "SELECT * FROM anggota WHERE id = " . $id;
        $data_anggota = mysqli_query($koneksi, $query)->fetch_array();
        // $data_anggota = mysqli_fetch_array($data);
    }
    ?>

      <form action="anggota_act.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= @$data_anggota['id'] ?>" />

        <div class="row mb-4">
          <label for="idanggota" class="col-lg-2 col-form-label">ID Anggota: </label>
          <div class="col-lg-4">
            <input type="text" name="idanggota" id="idanggota" class="form-control" value="<?= @$data_anggota['idanggota'] ?>" />
          </div>
        </div>

        <div class="row mb-4">
          <label for="nama" class="col-lg-2 col-form-label">Nama Anggota: </label>
          <div class="col-lg-4">
            <input type="text" name="nama" id="nama" class="form-control" value="<?= @$data_anggota['nama'] ?>" />
          </div>
        </div>

        <div class="row mb-4">
          <label for="jeniskelamin" class="col-lg-2 col-form-label">Jenis Kelamin: </label>
          <div class="col-lg-4">

            <div class="form-check">
              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="L" <?= (@$data_anggota['jeniskelamin']) == "L" ? "checked" : "" ?> />
              <label class="form-check-label" for="jeniskelamin"> Laki-Laki </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioCheckedDisabled" value="P" <?= (@$data_anggota['jeniskelamin']) == "P" ? "checked" : "" ?> />
              <label class="form-check-label" for="flexRadioCheckedDisabled"> Perempuan </label>
            </div>

          </div>
        </div>

        <div class="row mb-4">
          <label for="alamat" class="col-lg-2 col-form-label">Alamat: </label>
          <div class="col-lg-4">
            <input type="text" name="alamat" id="alamat" class="form-control"  value="<?= @$data_anggota['alamat'] ?>" />
          </div>
        </div>

        <div class="row mb-4">
          <label for="foto" class="col-lg-2 col-form-label">Foto: </label>
          <div class="col-lg-4">
            <?= (@$data_anggota['foto']) ? '<img src="../public/' . $data_anggota['foto'] . '" width="300" class="mb-3" />' : "" ?>
            <input type="file" name="foto" id="foto" class="form-control" />
            <input type="hidden" name="foto_lama" id="foto_lama" value="<?= (@$data_anggota['foto']) ?>" class="form-control" />
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-lg-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="../anggota" class="ms-4">Kembali</a>
          </div>
        </div>
        
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
  </body>
</html>