

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Fitur our team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our team</a></li>
                <li class="breadcrumb-item active">Fitur our team</li>
            </ol>
            <hr>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 pt-2">
                        <img src="<?= base_url('assets/gambar/our_team/') ?><?= $queryour_teamDetail->gambar; ?>" width="270">
                    </div>  
                    <div class="col-md-6">
                        <h1><i><?= $queryour_teamDetail->nama ?></i></h1>
                        <p align="justify"><?= $queryour_teamDetail->deskripsi ?></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Fitur our team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah biodata
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="200">nama</th>
                                <th class="text-center" width="200">jenis kelamin</th>
                                <th class="text-center" width="200">T T L</th>
                                <th class="text-center" width="200">kebangsaan</th>
                                <th class="text-center" width="200">status</th>
                                <th class="text-center" width="200">agama</th>
                                <th class="text-center" width="200">alamat</th>
                                <th class="text-center" width="200">telepon</th>
                                <th class="text-center" width="200">email</th>
                                <th class="text-center" width="200">aksi</th>
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
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->nama ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->jenis_kelamin ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->tempat_tanggal_lahir ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->kebangsaan ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->status ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->agama ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->alamat ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->telepon ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->email ?></td>
                                    
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_fitur/') . $row->id . '/' . $id_our_team ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/fungsi_hapusfitur/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/detail_fitur/') . $row->id . '/' . $id_our_team  ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a>
                                    <a href="<?= base_url('our_team/subfitur/') . $row->id . '/' . $id_our_team ?>" class="btn btn-primary mt-2">Sub Fitur</a>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah biodata</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambahfitur'); ?>
                    <input type="hidden" name="id_our_team" value="<?= $queryour_teamDetail->id ?>">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
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
                        <input type="text" class="form-control" id="inputAddress2" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">email</label>
                        <input type="text" class="form-control" id="inputAddress2" name="email" required>
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

