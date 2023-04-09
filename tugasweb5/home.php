<?php

$database = new Database();
$data = $database->x("tb_barang");

?>

<div class="main">
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td> <?= $row['id']; ?></td>
                <td> <?= $row['nama_barang']; ?></td>
                <td> <?= $row['harga']; ?></td>
                <td>
                    <a href="update?id=<?= $row['id']; ?>">Ubah</a>
                    <a href="delete?id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="tambah" href="add">tambah</a>
</div>