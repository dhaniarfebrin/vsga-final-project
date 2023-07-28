<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  </head>
  <body style="height: 100vh; overflow:hidden">
  <?php include_once "./src/components/NavBar_notLoggedIn.php" ?>
    <div class="container h-100">
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center flex-column h-100">
            <h1 class="fw-bold">Welcome to <span class="text-primary">SIMPERPUS</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div>
              <a href="login" class="btn btn-lg btn-primary rounded-pill px-4 mt-4">Login to Access</a>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="d-flex justify-content-center flex-column h-100">
          <img src="public/hero.svg">
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
  </body>
</html>