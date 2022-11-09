<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit SubFitur</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk/fitur/') . $id_produk ?>">Fitur Produk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk/subfitur/') . $querySubFiturDetail->id_fitur . '/' . $id_fitur ?>">SubFitur Produk</a></li>
                <li class="breadcrumb-item active">Edit SubFitur</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('produk/fungsi_editsubfitur'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID Fitur</label>
                                <input type="text" class="form-control" id="inputAddress" name="id_fitur" value="<?= $querySubFiturDetail->id_fitur ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $querySubFiturDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Nama SubFitur</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama_subfitur" value="<?= $querySubFiturDetail->nama_subfitur ?>" required>
                            </div>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit SubFitur</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>