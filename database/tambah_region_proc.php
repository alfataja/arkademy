<?php
include "koneksi.php";

$mysql = "INSERT INTO regions
      (id_regions, name, created_at)

      VALUES

      ('$_POST[id]', '$_POST[nama]', now())";

if(!mysqli_query($koneksi,$mysql))
die (mysqli_error($koneksi));

echo"<script>alert('Data berhasil diinput.');window.location.href='../region.php';</script>";

?>
