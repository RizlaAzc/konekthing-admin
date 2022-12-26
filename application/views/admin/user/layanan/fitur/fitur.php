<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Fitur Layanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('layanan') ?>">Layanan</a></li>
                <li class="breadcrumb-item active">Fitur Layanan</li>
            </ol>
            <hr>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h1 class="text-center"><b><?= $queryLayananDetail->nama ?></b></h1>
                        <h4 class="text-center"><i><?= $queryLayananDetail->judul ?></i></h4>
                        <p align="justify" class="text-center"><?= $queryLayananDetail->deskripsi ?></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Fitur Layanan Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Fitur
                    </button>
                    <div class="btn-group" style="float: right; margin-right: 5px;">
                        <button type="button" class="btn btn-warning text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Export</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('layanan/excel_fitur/' . $id_layanan) ?>">Excel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('layanan/pdf_fitur/' . $id_layanan) ?>">Pdf</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="200">Nama Fitur</th>
                                <th class="text-center" width="500">Deskripsi Fitur</th>
                                <th class="text-center" width="100">Gambar</th>
                                <th class="text-center" width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllFitur as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->nama_fitur ?></td>
                                    <td style="vertical-align: middle;" align="justify"><?= $row->deskripsi_fitur ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><img src="<?= base_url('assets/gambar/layanan/fitur/') ?><?= $row->gambar_fitur; ?>" width="75"></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('layanan/edit_fitur/') . $row->id . '/' . $id_layanan ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<?php if ($this->session->userdata('role_id') == 2) { ?><a href="<?= base_url('layanan/fungsi_hapusfitur/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<?php } ?><a href="<?= base_url('layanan/detail_fitur/') . $row->id . '/' . $id_layanan ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Fitur</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('layanan/fungsi_tambahfitur'); ?>
                    <input type="hidden" name="id_layanan" value="<?= $queryLayananDetail->id ?>">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama Fitur</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama_fitur" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi Fitur</label>
                        <input type="text" class="form-control" id="inputAddress2" name="deskripsi_fitur" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Gambar Fitur</label>
                        <input type="file" class="form-control" id="inputAddress2" name="gambar_fitur" required>
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