<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Blog Contents <a href="<?= base_url('blog/tambah_blog') ?>" class="btn btn-primary text-light" style="float: right;">Tambah Blog</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Url</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $count = 0;
                            foreach ($queryAllBlg as $row) {
                                $count = $count + 1;

                            ?>
                                <tr>
                                    <td><?= $count ?></td>
                                    <td><?= $row->gambar ?></td>
                                    <td><?= $row->judul ?></td>
                                    <td><?= $row->deskripsi ?></td>
                                    <td><?= $row->url ?></td>
                                    <td><a href="<?= base_url('blog/edit_blog/'). $row->id ?>"><i class="fa-solid fa-file-arrow-down"></i></a> | <a href="<?= base_url('blog/fungsi_hapus') ?>/<?= $row->id ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                            <?php

                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>