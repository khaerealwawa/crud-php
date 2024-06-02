<h2 class="mb-4">List Data Pelanggan</h2>
<a href="pelanggan_create.php" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No. Telpon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $data = mysqli_query($konek, "SELECT * FROM pelanggan ORDER BY nmpelanggan ASC");
        $no = 1;
        foreach ($data as $d) {
        ?>
            <tr>
                <td class="text-center"><?= $no; ?></td>
                <td><?= $d['nmpelanggan']; ?></td>
                <td><?= $d['alamat']; ?></td>
                <td><?= $d['telp']; ?></td>
                <td class="text-center">
                    <a href="pelanggan_update.php?id=<?= $d['idpelanggan']; ?>" class="btn btn-warning">
                        Edit</a>
                    <a href="pelanggan_delete.php?id=<?= $d['idpelanggan']; ?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus?');">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>
