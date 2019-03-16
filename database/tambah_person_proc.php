<?php
include "koneksi.php";

$mysql = "INSERT INTO person
      (id_person, person_name, address, income, created_at)

      VALUES

      ('$_POST[id]', '$_POST[nama]', '$_POST[alamat]', '$_POST[income]', now())";

if(!mysqli_query($koneksi,$mysql))
die (mysqli_error($koneksi));

echo"<script>alert('Data berhasil diinput.');window.location.href='../penduduk.php';</script>";

?>
