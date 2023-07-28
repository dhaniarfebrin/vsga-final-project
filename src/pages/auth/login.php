<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Simperpus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body style="height: 80vh; overflow:hidden">
  <?php include_once "./src/components/NavBar_notLoggedIn.php" ?>
  <div class="container h-100">
    <div class="d-flex justify-content-center align-items-center h-100">
      <main class="form-signin w-25">
      <?php

      if (@$_POST) {
        if ($_POST["username"] == "admin") {
          if ($_POST["password"] == "password") {
            header("Location: transaksi");
          }
        }
      }

      ?>
        <form method="POST">
          <h1 class="h3 mb-3 fw-normal">Please sign in to Access</h1>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
            <label for="floatingInput">Username</label>
          </div>

          <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <button class="btn btn-primary w-100 py-2 mt-4">Sign in</button>
        </form>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="./src/script/script.js"></script>
</body>

</html>