<?php

include "koneksi.php";
$id=$_POST['id'];
$hapus= "delete from regions where id_regions='$id'";
$hasil=mysqli_query($koneksi,$hapus);

if ($hapus) {
	echo "<script>alert('Data berhasil dihapus');window.location.href='../region.php'</script>";
}
 ?>
