<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
<body style="background-color: #eaeaea">
    <div class="container mt-5">
        <h1 class="mt-5">Form Buku</h1>        

        <form action="./../src/utils/buku/buku_act.php" method="POST">
            <div class="row mb-3">
                <label for="judul_buku" class="col-lg-2 col-form-label">Judul Buku</label>
                <div class="col-lg-3">
                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="isbn" class="col-lg-2 col-form-label">ISBN</label>
                <div class="col-lg-3">
                    <input type="text" name="isbn" id="isbn" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="pengarang" class="col-lg-2 col-form-label">Pengarang</label>
                <div class="col-lg-3">
                    <input type="text" name="pengarang" id="pengarang" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="penerbit" class="col-lg-2 col-form-label">Penerbit</label>
                <div class="col-lg-3">
                    <input type="text" name="penerbit" id="penerbit" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="tahun" class="col-lg-2 col-form-label">Tahun</label>
                <div class="col-lg-3">
                    <input type="text" name="tahun" id="tahun" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <button class="btn btn-primary me-3" type="submit">Tambah</button>
                    <a href="../buku">Kembali</a>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>