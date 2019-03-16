<?php
include"koneksi.php";

  if(isset($_POST['id'])){
    $edit="update person set
    person_name='$_POST[nama]', address='$_POST[alamat]', income='$_POST[income]', created_at=now() where id_person='$_POST[id]'";

    $hasil=mysqli_query($koneksi,$edit);

    if($hasil){
      echo"<script>alert('Data Penduduk Berhasil Diedit!');window.location.href='../penduduk.php';</script>";
      }
  }

?>
