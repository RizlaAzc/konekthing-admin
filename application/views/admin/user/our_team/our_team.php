

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">our team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item active">our team</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    our team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah our team
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="1">nama</th>
                                <th class="text-center" width="1">Deskripsi</th>
                                <th class="text-center" width="1">email</th>
                                <th class="text-center" width="1">gender</th>
                                <th class="text-center" width="1">TTL</th>
                                <th class="text-center" width="1">kebangsaan</th>
                                <th class="text-center" width="1">status</th>
                                <th class="text-center" width="1">agama</th>
                                <th class="text-center" width="1">alamat</th>
                                <th class="text-center" width="1">telepon</th>
                                <th class="text-center" width="1">gambar</th>
                                <th class="text-center" width="170">Aksi</th>
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
                                    <td style="vertical-align: middle;"><?= substr($row->nama, 0, 67) ?><a></a></td>
                                    <td style="vertical-align: middle;"><?= substr($row->deskripsi, 0, 114) ?><a></a></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->email ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->jenis_kelamin ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->tempat_tanggal_lahir ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->kebangsaan ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->status ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->agama ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->alamat ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->telpon ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><img src="<?= base_url('assets/gambar/our_team/') ?><?= $row->gambar; ?>" width="75"></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_our_team/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/detail_our_team/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a>
                                    <a href="<?= base_url('our_team/riwayat_pendidikan_ourteam/') . $row->id ?>" class="btn btn-primary mt-2">riwayat pendidikan </a>
                                    <a href="<?= base_url('our_team/pengalaman_kerja_ourteam/') . $row->id ?>" class="btn btn-primary mt-2">pengalaman kerja </a>
                                    <a href="<?= base_url('our_team/handle_pekerjaan_ourteam/') . $row->id ?>" class="btn btn-primary mt-2">handle pekerjaan </a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah our team</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">nama</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">jenis kelmin</label>
                        <input type="text" class="form-control" id="inputAddress2" name="jenis_kelamin" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">tempat tanggal lahir</label>
                        <input type="text" class="form-control" id="inputCity" name="tempat_tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">kebangsaan</label>
                        <input type="text" class="form-control" id="inputAddress2" name="kebangsaan" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">status</label>
                        <input type="text" class="form-control" id="inputAddress2" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">agama</label>
                        <input type="text" class="form-control" id="inputAddress2" name="agama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="inputAddress2" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">telepon</label>
                        <input type="text" class="form-control" id="inputAddress2" name="telpon" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">email</label>
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
