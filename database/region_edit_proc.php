<?php
include"koneksi.php";

  if(isset($_POST['id'])){
    $edit="update regions set
    name='$_POST[nama]', created_at=now() where id_regions='$_POST[id]'";

    $hasil=mysqli_query($koneksi,$edit);

    if($hasil){
      echo"<script>alert('Data Region Berhasil Diedit!');window.location.href='../region.php';</script>";
      }
  }

?>
