<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Sosial Media</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('sosial_media') ?>">Sosial Media</a></li>
                <li class="breadcrumb-item active">Edit Sosial Media</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('sosial_media/fungsi_edit'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-md-6" style="float: right; padding-left: 5px;">
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Url</label>
                                    <input type="text" class="form-control" id="inputCity" name="url" value="<?= $querySosialMediaDetail->url ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="inputCity" name="gambar">
                                    <img class="mt-2" src="<?= base_url('assets/gambar/sosial_media/') ?><?= $querySosialMediaDetail->gambar; ?>" width="100">
                                    <p><?= $querySosialMediaDetail->gambar; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 5px;">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $querySosialMediaDetail->id ?>" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $querySosialMediaDetail->nama ?>" required>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Edit Sosial Media</button>
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