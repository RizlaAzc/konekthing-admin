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
                    Blog DataTables<a href="<?= base_url('blog/tambah_blog') ?>" class="btn btn-primary text-light" style="float: right;">Tambah Blog</a>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="200">Judul</th>
                                <th class="text-center" width="350">Deskripsi</th>
                                <th class="text-center" width="250">Url</th>
                                <th class="text-center" width="100">Gambar</th>
                                <th class="text-center" width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllBlg as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td style="vertical-align: middle;"><?= $row->judul ?></td>
                                    <td style="vertical-align: middle;"><?= $row->deskripsi ?></td>
                                    <td style="vertical-align: middle;"><?= $row->url ?></td>
                                    <td class="text-center"><img src="<?= base_url('gambar/blog/') ?><?= $row->gambar; ?>" width="75"></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('blog/edit_blog/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('blog/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('blog/detail_blog/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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