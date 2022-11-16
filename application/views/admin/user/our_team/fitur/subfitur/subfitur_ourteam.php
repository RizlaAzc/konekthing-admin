<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">SubFitur our team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/fitur/') . $id_our_team ?>">Fitur our team</a></li>
                <li class="breadcrumb-item active">SubFitur our team</li>
            </ol>
            <hr>
            <div class="container">
                <div class="row justify-content-center">
                   
                    <div class="col-md-6 pt-5">
                        <i style="font-size: 50px;"><b><?= $queryFiturDetail->nama ?></b></i>
                        <br>
                        <p align="justify"><?= $queryFiturDetail->tempat_tanggal_lahir ?></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    SubFitur our team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah SubFitur pendidikan & pengalaman
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="20">ID</th>
                                <th class="text-center" width="300">TK</th>
                                <th class="text-center" width="300">SD</th>
                                <th class="text-center" width="300">SMP</th>
                                <th class="text-center" width="300">SMA</th>
                                <th class="text-center" width="400">PERGURUAN TINGGI</th>
                                <th class="text-center" width="400">PENGALAMAN</th>
                                <th class="text-center" width="400">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllSubFitur as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td style="vertical-align: middle;"><?= $row-> tk?></td>
                                    <td style="vertical-align: middle;"><?= $row-> sd?></td>
                                    <td style="vertical-align: middle;"><?= $row-> smp?></td>
                                    <td style="vertical-align: middle;"><?= $row-> sma?></td>
                                    <td style="vertical-align: middle;"><?= $row-> perguruan_tinggi?></td>
                                    <td style="vertical-align: middle;"><?= $row-> pengalaman?></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_subfitur/') . $row->id . '/' . $id_our_team . '/'. $id_fitur  ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/fungsi_hapussubfitur/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/detail_subfitur/') . $row->id . '/' . $id_our_team . '/'. $id_fitur ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah pendidikan & pengalaman</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambahsubfitur'); ?>
                    <input type="hidden" name="id_fitur" value="<?= $queryFiturDetail->id ?>">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">tk</label>
                        <input type="text" class="form-control" id="inputAddress" name="tk" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">sd</label>
                        <input type="text" class="form-control" id="inputAddress" name="sd" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">smp</label>
                        <input type="text" class="form-control" id="inputAddress" name="smp" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">sma</label>
                        <input type="text" class="form-control" id="inputAddress" name="sma" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">perguruan tinggi</label>
                        <input type="text" class="form-control" id="inputAddress" name="perguruan_tinggi" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">pengalaman</label>
                        <input type="text" class="form-control" id="inputAddress" name="pengalaman" required>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
