<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produk Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Produk
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="120">Nama</th>
                                <th class="text-center" width="150">Judul</th>
                                <th class="text-center" width="200">Deskripsi</th>
                                <th class="text-center" width="200">Url</th>
                                <th class="text-center" width="100">Gambar</th>
                                <th class="text-center" width="130">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllPrdk as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->nama ?></td>
                                    <td style="vertical-align: middle;"><?= substr($row->judul, 0, 16) ?><a>...</a></td>
                                    <td style="vertical-align: middle;"><?= substr($row->deskripsi, 0, 28) ?><a>...</a></td>
                                    <td style="vertical-align: middle;"><?= substr($row->url, 0, 28) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><img src="<?= base_url('assets/gambar/produk/') ?><?= $row->gambar; ?>" width="75"></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('produk/edit_produk/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('produk/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('produk/detail_produk/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a><a href="<?= base_url('produk/fitur/') . $row->id ?>" class="btn btn-primary mt-2">Fitur Produk</a></td>
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

    <!-- Form Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('produk/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="inputAddress" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Url</label>
                        <input type="text" class="form-control" id="inputCity" name="url" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="inputCity" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>