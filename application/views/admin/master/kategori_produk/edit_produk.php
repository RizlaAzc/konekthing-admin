<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Kategori Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Master</li>
                <li class="breadcrumb-item"><a href="<?= base_url('kategori_produk') ?>">Kategori Produk</a></li>
                <li class="breadcrumb-item active">Edit Kategori Produk</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('kategori_produk/fungsi_edit'); ?>
                <table border="1">
                    <br>
                    <tr>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryKategoriDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Kategori Produk</label>
                                <input type="text" class="form-control" id="inputAddress" name="kategori_produk" value="<?php echo $queryKategoriDetail->kategori_produk ?>" required>
                            </div>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Kategori</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>