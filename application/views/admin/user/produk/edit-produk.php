<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('produk/fungsi_edit'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryPrdkDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $queryPrdkDetail->nama ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="inputAddress" name="judul" value="<?= $queryPrdkDetail->judul ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryPrdkDetail->deskripsi ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Url</label>
                                <input type="text" class="form-control" id="inputCity" name="url" value="<?= $queryPrdkDetail->url ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="inputCity" name="gambar" required>
                                <img class="mt-2" src="<?= base_url('assets/gambar/produk/') ?><?= $queryPrdkDetail->gambar; ?>" width="100">
                                <p><?= $queryPrdkDetail->gambar; ?></p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Produk</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>