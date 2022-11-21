

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">riwayat pendidikan our team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item active">riwayat pendidikan our team</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    riwayat pendidikan our team Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah riwayat pendidikan our team
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="100">nama sekolah</th>
                                <th class="text-center" width="100">type sekolah</th>
                                <th class="text-center" width="100">deskripsi</th>
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
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->nama_sekolah ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->type_sekolah ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->deskripsi ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('our_team/edit_riwayat_pendidikan_ourteam/') . $row->id . '/' . $id_our_team?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/fungsi_hapusriwayat_pendidikan_ourteam/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('our_team/detail_riwayat_pendidikan_ourteam/') . $row->id . '/' . $id_our_team?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah riwayat pendidikan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('our_team/fungsi_tambahriwayat_pendidikan_ourteam '); ?>
                     <input type="hidden" name="id_our_team" value="<?= $queryour_teamDetail->id ?>">
                    <div class="form-group">
                        <label for="inputCity" class="form-label">nama sekolah</label>
                        <input type="text" class="form-control" id="inputCity" name="nama_sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">type sekolah</label>
                        <input type="text" class="form-control" id="inputAddress2" name="type_sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">deskripsi</label>
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
