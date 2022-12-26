<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pengalaman Kerja Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item active">Pengalaman Kerja Our Team</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Pengalaman Kerja Our Team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Pengalaman Kerja
                    </button>
                    <div class="btn-group" style="float: right; margin-right: 5px;">
                        <button type="button" class="btn btn-warning text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Export</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('our_team/excel_pengalaman/' . $id_our_team) ?>">Excel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('our_team/pdf_pengalaman/' . $id_our_team) ?>">Pdf</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="240">Nama Pengalaman</th>
                                <th class="text-center" width="130">Tahun Dari</th>
                                <th class="text-center" width="130">Tahun Sampai</th>
                                <th class="text-center" width="300">Deskripsi</th>
                                <th class="text-center" width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllpengalaman_kerja_ourteam as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= substr($row->nama_pengalaman, 0, 27) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->tahun_dari ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->tahun_sampai ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= substr($row->peskripsi, 0, 36) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_pengalaman_kerja_ourteam/') . $row->id . '/' . $id_our_team ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<?php if ($this->session->userdata('role_id') == 2) { ?><a href="<?= base_url('our_team/fungsi_hapuspengalaman_kerja_ourteam/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<?php } ?><a href="<?= base_url('our_team/detail_pengalaman_kerja_ourteam/') . $row->id . '/' . $id_our_team ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Pengalaman Kerja Our Team</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambah_pengalaman_kerja_ourteam'); ?>
                    <input type="hidden" name="id_our_team" value="<?= $queryour_teamDetail->id ?>">
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Nama Pengalaman</label>
                        <input type="text" class="form-control" id="inputCity" name="nama_pengalaman" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Tahun Dari</label>
                        <input type="text" class="form-control" id="inputAddress2" name="tahun_dari" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Tahun Sampai</label>
                        <input type="text" class="form-control" id="inputAddress2" name="tahun_sampai" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="peskripsi" required>
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