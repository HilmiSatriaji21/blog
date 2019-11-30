<?php
session_start();
include 'config/koneksi.php';
if (isset($_POST['btnLogin'])) {
    $db = new Database();
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $result = mysqli_query(
      $db->koneksi,
      "SELECT * FROM users WHERE email='$email' and password='$pass'"
    );
    $row = mysqli_num_rows($result);
    // var_dump($row);
    if ($row > 0) {
      $_SESSION['login'] = $pass;
      echo "<script type='text/javascript'>
      alert('Login Berhasil!');
          window.location = 'admin/index.php'
      </script>";
      //;
    }else {
      echo "<script type='text/javascript'>
      alert('Email Atau Password Anda Salah!');
      </script>";
      header("location:login.php");
    }
}
?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="/assets/admin-template/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/assets/admin-template/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/assets/admin-template/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/admin-template/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/assets/admin-template/css/style.css" rel="stylesheet">
    <link href="/assets/admin-template/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
        <div class="col-md-12">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
               <div class="col-6 ">
                 <i class="fa fa-facebook fa-lg mt-4"></i>
                 <i class="fa fa-instagram fa-lg mt-4"></i>
                 <i class="fa fa-twitter fa-lg mt-4"></i>
                 <i class="fa fa-pinterest fa-lg mt-4"></i>
                 <i class="fa fa-youtube-play fa-lg mt-4"></i>
                 <i class="fa fa-linux fa-lg mt-4"></i>
                 <i class="fa fa-html5 fa-lg mt-4"></i>
                 <i class="fa fa-google fa-lg mt-4"></i>
                 <i class="fa fa-github fa-lg mt-4"></i>
                 <i class="fa fa-css3 fa-lg mt-4"></i>
                 <i class="fa fa-chrome fa-lg mt-4"></i>
                 <i class="fa fa-apple fa-lg mt-4"></i>
                 <i class="fa fa-android fa-lg mt-4"></i>
                 <i class="fa fa-usd"></i>
                 <i class="fa fa-bitcoin fa-lg mt-4"></i>
                 <i class="fa fa-thumbs-up fa-lg mt-4"></i>
                 <i class="fa fa-whatsapp fa-lg mt-4"></i>
                 <i class="fa fa-reddit-alien fa-lg mt-4"></i>
                 <i class="fa fa-diamond fa-lg mt-4"></i>
                 <i class="fa fa-gamepad fa-lg mt-4"></i>
                </div>
                <h1>Login</h1>
                <form action="" method="post">
                <p class="text-muted">Sign In to your account</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit" name="btnLogin">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                      <img src="/assets/admin-template/img/index.png" alt="SMK" style="height:auto; width:250px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/assets/admin-template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/assets/admin-template/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/admin-template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/assets/admin-template/node_modules/pace-progress/pace.min.js"></script>
    <script src="/assets/admin-template/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="/assets/admin-template/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>
