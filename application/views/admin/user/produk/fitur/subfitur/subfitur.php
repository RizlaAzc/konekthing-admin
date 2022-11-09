<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">SubFitur Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk/fitur/') . $id_produk ?>">Fitur Produk</a></li>
                <li class="breadcrumb-item active">SubFitur Produk</li>
            </ol>
            <hr>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="<?= base_url('assets/gambar/produk/fitur/') ?><?= $queryFiturDetail->gambar_fitur ?>" width="260">
                    </div>
                    <div class="col-md-6 pt-5">
                        <i style="font-size: 32px;"><b><?= $queryFiturDetail->nama_fitur ?></b></i>
                        <br>
                        <p align="justify"><?= $queryFiturDetail->deskripsi_fitur ?></p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produk SubFitur Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah SubFitur
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="800">Nama SubFitur</th>
                                <th class="text-center" width="100">Aksi</th>
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
                                    <td style="vertical-align: middle;"><?= $row->nama_subfitur ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('produk/edit_subfitur/') . $row->id . '/' . $id_produk . '/' . $id_fitur ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('produk/fungsi_hapussubfitur/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('produk/detail_subfitur/') . $row->id . '/' . $id_produk . '/' . $id_fitur ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah SubFitur</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('produk/fungsi_tambahsubfitur'); ?>
                    <input type="hidden" name="id_fitur" value="<?= $queryFiturDetail->id ?>">
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Nama SubFitur</label>
                        <input type="text" class="form-control" id="inputAddress" name="nama_subfitur" required>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>