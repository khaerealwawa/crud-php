<h2 class="mb-4">Edit/Update Data Pelanggan</h2>
<?php
include "koneksi.php";
$data_edit = mysqli_query($konek, "SELECT * FROM pelanggan WHERE idpelanggan='$_GET[id]'");
$e = mysqli_fetch_array($data_edit);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['idpelanggan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $update_data = mysqli_query($konek, "UPDATE pelanggan SET nmpelanggan='$nama',alamat='$alamat',telp='$telp' WHERE idpelanggan='$id'");
    if ($update_data) {
        header('location:pelanggan_read.php');
    } else {
        echo "<div class='alert alert-danger'>Proses gagal...</div>";
    }
}
?>
<form action="" method="post">
    <input type="hidden" name="idpelanggan" value="<?= $e['idpelanggan']; ?>">
    <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= $e['nmpelanggan']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" required><?= $e['alamat']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" name="telp" value="<?= $e['telp']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="pelanggan_read.php" class="btn btn-danger">Batal</a>
</form>
