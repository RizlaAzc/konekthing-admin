<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item active">Our Team</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Our Team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Team
                    </button>
                    <div class="btn-group" style="float: right; margin-right: 5px;">
                        <button type="button" class="btn btn-warning text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Export</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('our_team/excel') ?>">Excel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('our_team/pdf') ?>">Pdf</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="1">Nama</th>
                                <th class="text-center" width="1">Deskripsi</th>
                                <th class="text-center" width="1">Email</th>
                                <th class="text-center" width="1">Gender</th>
                                <th class="text-center" width="1">TTL</th>
                                <th class="text-center" width="1">Kebangsaan</th>
                                <th class="text-center" width="1">Status</th>
                                <th class="text-center" width="1">Agama</th>
                                <th class="text-center" width="1">Alamat</th>
                                <th class="text-center" width="1">Telepon</th>
                                <th class="text-center" width="1">Gambar</th>
                                <th class="text-center" width="2">aksi</th>
                                <th class="text-center" width="2">forms</th>
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
                                    <td style="vertical-align: middle;"><?= $row->nama ?><a></a></td>
                                    <td style="vertical-align: middle;"><?= $row->deskripsi ?><a></a></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->email ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->jenis_kelamin ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->tempat_tanggal_lahir ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->kebangsaan ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->status ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->agama ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->alamat ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->telpon ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><img src="<?= base_url('assets/gambar/our_team/') ?><?= $row->gambar; ?>" width="75"></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_our_team/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>
                                        <hr><a href="<?= base_url('our_team/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>
                                        <hr><a href="<?= base_url('our_team/detail_our_team/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('our_team/riwayat_pendidikan_ourteam/') . $row->id ?>" class="btn btn-primary mt-2">Riwayat Pendidikan </a>
                                        <a href="<?= base_url('our_team/pengalaman_kerja_ourteam/') . $row->id ?>" class="btn btn-primary mt-2">Pengalaman Kerja </a>
                                        <a href="<?= base_url('our_team/handle_pekerjaan_ourteam/') . $row->id ?>" class="btn btn-primary mt-2">Handle Pekerjaan </a>
                                    </td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Our Team</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="inputAddress2" name="jenis_kelamin" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" id="inputCity" name="tempat_tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Kebangsaan</label>
                        <input type="text" class="form-control" id="inputAddress2" name="kebangsaan" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Status</label>
                        <input type="text" class="form-control" id="inputAddress2" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="inputAddress2" name="agama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress2" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="inputAddress2" name="telpon" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputAddress2" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="inputCity" name="gambar" required>
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