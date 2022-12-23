<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item active">Kontak</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kontak Tables
                    <div class="btn-group" style="float: right; margin-right: 5px;">
                        <button type="button" class="btn btn-warning text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-print"></i> Export</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('kontak/excel') ?>">Excel</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('kontak/pdf') ?>">Pdf</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="150">Nomor Telepon</th>
                                <th class="text-center" width="200">Email</th>
                                <th class="text-center" width="200">Lokasi</th>
                                <th class="text-center" width="250">Deskripsi</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllPrdk as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?php echo $row->telepon; ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?php echo $row->email; ?></td>
                                    <td style="vertical-align: middle;"><?php echo substr($row->lokasi, 0, 29) ?><a>...</a></td>
                                    <td style="vertical-align: middle;"><?php echo substr($row->deskripsi, 0, 33) ?><a>...</a></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('kontak/edit_kontak/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('kontak/detail_kontak/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Kontak</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('kontak/fungsi_tambah'); ?>
                    <div class="form-group">
                        <label for="inputPassword4" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="+62" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputAddress" placeholder="@gmail.com" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="lokasi" required>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputCity" name="deskripsi" required>
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