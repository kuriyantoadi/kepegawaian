<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="<?php base_url() ?>assets/img/icons/icon-48x48.png" />

  <title>Login</title>

  <link href="<?php base_url() ?>assets/css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
  <main class="d-flex w-100">
    <div class="container d-flex flex-column">
      <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
          <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
              <h1 class="h2">Selamat Datang</h1>
              <p class="lead">
                Silahkan Anda Login Sebagai Operator atau Kasubag
              </p>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">

                  <?= form_open('Login_operator/auth'); ?>
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input class="form-control form-control-lg" name="username" placeholder="Masukan Username Anda" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukan Password Anda" />

                    </div>

                    <div class="text-center mt-3">
                      <button style="margin-bottom:  50px" type="submit" class="btn btn-lg btn-primary">Login</button>
                    </div>
                    <small>
                      <a  href="Welcome">Login Sebagai Pegawai Negeri Sipil</a>
                    </small>
                    <?= form_close(); ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="js/app.js"></script>

</body>

</html>
