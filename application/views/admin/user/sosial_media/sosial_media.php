<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sosial Media</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item active">Sosial Media</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Sosial Media Tables
                    <button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Sosial Media
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="300">Nama</th>
                                <th class="text-center" width="400">Url</th>
                                <th class="text-center" width="100">Gambar</th>
                                <th class="text-center" width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllSosialMedia as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->nama; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->url; ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><img src="<?php echo base_url('assets/gambar/sosial_media/') ?><?php echo $row->gambar; ?>" width="75"></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('sosial_media/edit_sosial_media/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('sosial_media/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('sosial_media/detail_sosial_media/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Sosial Media</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('sosial_media/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Url</label>
                        <input type="text" class="form-control" id="inputCity" name="url" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="inputAddress2" name="gambar" required>
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