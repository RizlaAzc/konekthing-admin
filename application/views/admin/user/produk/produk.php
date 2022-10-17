<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
            <div>
                <hr>
                <table border="1">
                    <a href="<?= base_url('produk/tambah_produk') ?>">Tambah Produk</a>
                    <br>
                    <br>
                    <tr>
                        <td>ID</td>
                        <td>Nama Produk</td>
                        <td>Aksi</td>
                    </tr>
                    <?php
                    $count = 0;
                    foreach ($queryAllPrdk as $row) {
                        $count = $count + 1;
                    ?>
                        <tr>
                            <td><?= $count ?></td>
                            <td><?= $row->nama ?></td>
                            <td><a href="<?= base_url('produk/edit_produk') ?>/<?= $row->id ?>">Edit</a> | <a href="<?= base_url('produk/fungsi_hapus') ?>/<?= $row->id ?>">Hapus</a></td>
                        </tr>
                    <?php

                    }

                    ?>
                </table>
            </div>
        </div>
    </main>