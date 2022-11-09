<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Layanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item active">Layanan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Layanan Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Layanan
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="190">Nama</th>
                                <th class="text-center" width="200">Judul</th>
                                <th class="text-center" width="190">Deskripsi</th>
                                <th class="text-center" width="180">Sub Deskripsi</th>
                                <th class="text-center" width="140">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllLayanan as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->nama ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $row->judul ?></td>
                                    <td style="vertical-align: middle;"><?= substr($row->deskripsi, 0, 68) ?><a>...</a></td>
                                    <td style="vertical-align: middle;"><?= substr($row->sub_deskripsi, 0, 66) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('layanan/edit_layanan/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('layanan/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('layanan/detail_layanan/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a><a href="<?= base_url('layanan/fitur/') . $row->id ?>" class="btn btn-primary mt-2">Fitur Layanan</a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('layanan/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="inputAddress" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Sub Deskripsi</label>
                        <input type="text" class="form-control" id="inputAddress2" name="sub_deskripsi">
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