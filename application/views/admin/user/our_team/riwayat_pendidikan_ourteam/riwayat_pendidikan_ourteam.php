<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Riwayat Pendidikan Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item active">Riwayat Pendidikan Our Team</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Riwayat Pendidikan Our Team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Riwayat Pendidikan
                    </button>
                    <div class="btn-group" style="float: right; margin-right: 5px;">
                        <button type="button" class="btn btn-warning text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Export</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('our_team/excel_riwayat/' . $id_our_team) ?>">Excel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('our_team/pdf_riwayat/' . $id_our_team) ?>">Pdf</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="220">Nama Sekolah</th>
                                <th class="text-center" width="130">Type Sekolah</th>
                                <th class="text-center" width="450">Deskripsi</th>
                                <th class="text-center" width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllriwayat_pendidikan_ourteam as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= substr($row->nama_sekolah, 0, 22) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->type_sekolah ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= substr($row->deskripsi, 0, 57) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_riwayat_pendidikan_ourteam/') . $row->id . '/' . $id_our_team ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/fungsi_hapusriwayat_pendidikan_ourteam/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/detail_riwayat_pendidikan_ourteam/') . $row->id . '/' . $id_our_team ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Riwayat Pendidikan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambahriwayat_pendidikan_ourteam '); ?>
                    <input type="hidden" name="id_our_team" value="<?= $queryour_teamDetail->id ?>">
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Nama Sekolah</label>
                        <input type="text" class="form-control" id="inputCity" name="nama_sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Type Sekolah</label>
                        <input type="text" class="form-control" id="inputAddress2" name="type_sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="deskripsi" required>
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