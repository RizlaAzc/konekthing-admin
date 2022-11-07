<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Layanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('layanan') ?>">Layanan</a></li>
                <li class="breadcrumb-item active">Edit Layanan</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('layanan/fungsi_edit'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryLynDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="inputAddress" name="judul" value="<?= $queryLynDetail->judul ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryLynDetail->deskripsi ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Url</label>
                                <input type="text" class="form-control" id="inputCity" name="url" value="<?= $queryLynDetail->url ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="inputCity" name="gambar" required>
                                <img class="mt-2" src="<?= base_url('assets/gambar/layanan/') ?><?= $queryLynDetail->gambar; ?>" width="100">
                                <p><?= $queryLynDetail->gambar; ?></p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Layanan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>