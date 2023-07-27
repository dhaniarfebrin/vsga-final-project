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
      <h1 class="mb-4">Edit Data Buku</h1>

    <?php
    include_once './src/koneksi.php';

    if (@$_GET['id']) {
        # code...
        $id = @$_GET['id'];

        $query = "SELECT * FROM buku WHERE id_buku = " . $id;
        $data_buku = mysqli_query($koneksi, $query)->fetch_array();
    }
    ?>

      <form action="./../src/utils/buku/buku_act.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= @$data_buku['id_buku'] ?>" />

            <div class="row mb-3">
                <label for="judul_buku" class="col-lg-2 col-form-label">Judul Buku</label>
                <div class="col-lg-3">
                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" class="form-control" value="<?= @$data_buku['judul_buku'] ?>" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="isbn" class="col-lg-2 col-form-label">ISBN</label>
                <div class="col-lg-3">
                    <input type="text" name="isbn" id="isbn" class="form-control" value="<?= @$data_buku['isbn'] ?>" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="pengarang" class="col-lg-2 col-form-label">Pengarang</label>
                <div class="col-lg-3">
                    <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= @$data_buku['pengarang'] ?>" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="penerbit" class="col-lg-2 col-form-label">Penerbit</label>
                <div class="col-lg-3">
                    <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= @$data_buku['penerbit'] ?>" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="tahun" class="col-lg-2 col-form-label">Tahun</label>
                <div class="col-lg-3">
                    <input type="text" name="tahun" id="tahun" class="form-control" value="<?= @$data_buku['tahun'] ?>" />
                </div>
            </div>

        <div class="row">
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