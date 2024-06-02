<?php
include "koneksi.php";
mysqli_query($konek, "DELETE FROM pelanggan WHERE idpelanggan='$_GET[id]'");
header('location:pelanggan_read.php');
?>
