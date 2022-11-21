<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Beranda</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Edit Beranda</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('beranda/fungsi_edit'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-md-6" style="float: right; padding-left: 5px;">
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Url</label>
                                    <input type="text" class="form-control" id="inputCity" name="url" value="<?= $queryBrndDetail->url ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Button</label>
                                    <input type="text" class="form-control" id="inputCity" name="button" value="<?= $queryBrndDetail->button ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="inputCity" name="gambar">
                                    <img class="mt-2" src="<?= base_url('assets/gambar/beranda/') ?><?= $queryBrndDetail->gambar; ?>" width="100">
                                    <p><?= $queryBrndDetail->gambar; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 5px;">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryBrndDetail->id ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="inputAddress" name="judul" value="<?= $queryBrndDetail->judul ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryBrndDetail->deskripsi ?>" required>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Edit Beranda</button>
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