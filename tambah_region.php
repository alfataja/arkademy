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
      padding: 0px 20px 0
    }

    footer {
      border-top: 1px solid #ddd;
      padding: 30px;
      margin-top: 20px
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

  <!-- cek pesan kesalahan -->


</head>

<body>
  <?php
  session_start();
  if($_SESSION['status']!="login"){
  	header("location:index.php?pesan=belum_login");
  }
  ?>

  </div>

  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Menu Utama</a></li>
        <li ><a href="penduduk.php">Data Penduduk</a></li>
        <li class="active"><a href="#">Data Wilayah</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="database/logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>

  <div class="container">


    <div class="jumbotron">
      <h1>Tambah Wilayah</h1>
    </div>
      <form action="database/tambah_region_proc.php" method="post">
      	<table width="1000" border="0" align="center">
      		<tr>
      			<td>ID Region</td>
      			<td ><input class="form-control" type="number" name="id" required /></td>
      		</tr>
      		<tr>
      			<td> Nama Region </td>
      			<td ><input class="form-control" type="text" name="nama" required/></td>
      		</tr>

      		<tr>
      			<td > </td>
      			<td height="68" align="right"><input type="reset" value="Reset" /></td>
      			<td ><input type="submit" value="Submit" /></td>
      		</tr>

      	</table>
      </form>
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
