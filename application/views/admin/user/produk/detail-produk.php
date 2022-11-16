<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('produk') ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <div class="col-md-6 text-center" style="float: right;">
                                        <label for="inputAddress2" class="form-label">Kategori</label>
                                        <div class="input-group justify-content-center mb-3">
                                            <?php
                                            foreach ($querymasterprodukDetail as $querymasterprodukDetail) {
                                                $kategori = $this->db->query("SELECT * FROM kategori_produk WHERE id_produk = '$queryPrdkDetail->id' AND id_kategori = '$querymasterprodukDetail->id'")->num_rows();
                                                if ($kategori >= 1) {
                                                    $select = 'checked';
                                                } else {
                                                    $select = '';
                                                }
                                            ?>
                                                <div class="input-group-text" style="margin-right: 15px;">
                                                    <input class="form-check-input mt-0" type="checkbox" name="id_kategori[]" value="<?= $querymasterprodukDetail->id ?>" <?= $select ?> disabled> &nbsp; <?= $querymasterprodukDetail->kategori_produk ?>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPrdkDetail->id ?>" readonly>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $queryPrdkDetail->judul ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Url</label>
                                        <input type="text" class="form-control" id="inputCity" name="url" value="<?php echo $queryPrdkDetail->url ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Gambar</label>
                                        <input type="text" class="form-control" id="inputCity" name="gambar" value="<?php echo $queryPrdkDetail->gambar ?>" readonly>
                                        <img class="mt-2" src="<?= base_url('assets/gambar/produk/') ?><?= $queryPrdkDetail->gambar; ?>" width="100">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Tutup Detail</button>
                                    </div>
                                </div>
                            </form>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>