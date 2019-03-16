<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <title>Aplikasi Sensus Penduduk</title>

  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Techie Bootstrap 3 skin">
  <meta name="keywords" content="bootstrap 3, skin, flat">
  <meta name="author" content="bootstraptaste">

  <!-- Bootstrap css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.techie.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Techie
    Theme URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <!-- Docs Custom styles -->
  <style>
    body,
    html {
      overflow-x: hidden
    }

    body {
      padding: 60px 20px 0
    }

    footer {
      border-top: 1px solid #ddd;
      padding: 30px;
      margin-top: 50px
    }

    .row>[class*=col-] {
      margin-bottom: 40px
    }

    .navbar-container {
      position: relative;
      min-height: 100px
    }

    .navbar.navbar-fixed-bottom,
    .navbar.navbar-fixed-top {
      position: absolute;
      top: 50px;
      z-index: 0
    }

    .navbar.navbar-fixed-bottom .container,
    .navbar.navbar-fixed-top .container {
      max-width: 90%
    }

    .btn-group {
      margin-bottom: 10px
    }

    .form-inline input[type=password],
    .form-inline input[type=text],
    .form-inline select {
      width: 180px
    }

    .input-group {
      margin-bottom: 10px
    }

    .pagination {
      margin-top: 0
    }

    .navbar-inverse {
      margin: 110px 0
    }
  </style>
  
  <?php

  $gagal = "login gagal! email dan password salah!";
  $logout = "Anda telah berhasil logout";
  $belum_login = "Anda harus Login terlebih dahulu";

  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){

  ?>
  <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php   echo $gagal; ?>
  </div>

  <?php
    }else if($_GET['pesan'] == "logout"){
  ?>

  <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php   echo $logout; ?>
  </div>
  <?php
    }else if($_GET['pesan'] == "belum_login"){
  ?>
  <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $belum_login;
    }
  }
  ?>
  </div>


  <!-- cek pesan kesalahan -->


</head>

<body>

  <div class="container">

    <div class="jumbotron">
      <h1>Aplikasi Sensus Penduduk</h1>
      <p>Tes Seleksi Arkademy Batch 9 </p>
    </div>

    <div class="row">
      <div class="col-sm-5 col-lg-5">
        <form class="form-horizontal" method="post" action="database/cek_login.php">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="inputPassword" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- /container -->

  <footer class="text-center">
    <p>&copy; Alfat Nursyahban</p>
    <div class="credits">
      <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version form: https://bootstrapmade.com/buy/?theme=Techie
      -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>

  <!-- Main Scripts-->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Bootstrap 3 has typeahead optionally -->
  <script src="assets/js/typeahead.min.js"></script>

</body>

</html>
