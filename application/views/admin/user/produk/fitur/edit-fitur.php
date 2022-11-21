<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Fitur Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk/fitur/') . $id_produk ?>">Fitur Produk</a></li>
                <li class="breadcrumb-item active">Edit Fitur Produk</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('produk/fungsi_editfitur'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-md-6" style="float: right; padding-left: 5px;">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">ID Produk</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id_produk" value="<?= $queryFiturDetail->id_produk ?>" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="inputCity" name="gambar_fitur">
                                    <img class="mt-2" src="<?= base_url('assets/gambar/produk/fitur/') ?><?= $queryFiturDetail->gambar_fitur; ?>" width="100">
                                    <p><?= $queryFiturDetail->gambar_fitur; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 5px;">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryFiturDetail->id ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nama Fitur</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama_fitur" value="<?= $queryFiturDetail->nama_fitur ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Deskripsi Fitur</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="deskripsi_fitur" value="<?= $queryFiturDetail->deskripsi_fitur ?>" required>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Edit Fitur</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>