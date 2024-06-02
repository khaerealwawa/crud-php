<h2 class="mb-4">Form Input Data Pelanggan</h2>
<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nmpelanggan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $simpan_data = mysqli_query($konek, "INSERT INTO 
    pelanggan(idpelanggan,nmpelanggan,alamat,telp) VALUES ('$id','$nama', '$alamat', '$telp')");
    if ($simpan_data) {
        header('location:pelanggan_read.php');
    } else {
        echo "<div class='alert alert-danger'>Proses gagal...</div>";
    }
}
?>
<form action="" method="post">

    <div class="mb-3">
        <label for="" class="form-label">Nama Pelanggan</label>
        <input type="text" class="form-control" name="nmpelanggan">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" required></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" name="telp" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="pelanggan_read.php" class="btn btn-danger">Batal</a>
</form>
