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
      <h1>Tambah Data Anggota</h1>   

      <form action="./../src/utils/anggota/anggota_act.php" method="POST" enctype="multipart/form-data">
        <div class="row mb-4">
          <label for="idanggota" class="col-lg-2 col-form-label">ID Anggota: </label>
          <div class="col-lg-4">
            <input type="text" name="idanggota" id="idanggota" class="form-control" />
          </div>
        </div>

        <div class="row mb-4">
          <label for="nama" class="col-lg-2 col-form-label">Nama Anggota: </label>
          <div class="col-lg-4">
            <input type="text" name="nama" id="nama" class="form-control" />
          </div>
        </div>

        <div class="row mb-4">
          <label for="jeniskelamin" class="col-lg-2 col-form-label">Jenis Kelamin: </label>
          <div class="col-lg-4">

            <div class="form-check">
              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="L"/>
              <label class="form-check-label" for="jeniskelamin"> Laki-Laki </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioCheckedDisabled" />
              <label class="form-check-label" for="flexRadioCheckedDisabled"> Perempuan </label>
            </div>

          </div>
        </div>

        <div class="row mb-4">
          <label for="alamat" class="col-lg-2 col-form-label">Alamat: </label>
          <div class="col-lg-4">
            <input type="text" name="alamat" id="alamat" class="form-control" />
          </div>
        </div>

        <div class="row mb-4">
          <label for="foto" class="col-lg-2 col-form-label">Foto: </label>
          <div class="col-lg-4">
            <input type="file" name="foto" id="foto" class="form-control" />
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