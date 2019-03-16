<?php

include "koneksi.php";
$id=$_POST['id'];
$hapus= "delete from person where id_person='$id'";
$hasil=mysqli_query($koneksi,$hapus);

if ($hapus) {
	echo "<script>alert('Data berhasil dihapus');window.location.href='../penduduk.php'</script>";
}
 ?>
