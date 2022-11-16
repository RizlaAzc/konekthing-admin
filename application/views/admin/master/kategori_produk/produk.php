<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Master</li>
                <li class="breadcrumb-item active">Kategori Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kategori Produk Tables<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        Tambah Kategori
                    </button>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="800">Kategori Produk</th>
                                <th class="text-center" width="100">Aksi</th>
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
                                    <td style="vertical-align: middle;"><?php echo $row->kategori_produk; ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('kategori_produk/edit_produk/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('kategori_produk/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('kategori_produk/detail_produk/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Kategori Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('kategori_produk/fungsi_tambah'); ?>

                    <div class="form-group">
                        <label for="inputCity" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="inputCity" name="kategori_produk" required>
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