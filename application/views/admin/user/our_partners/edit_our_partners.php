<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Our Partners</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_partners') ?>">Our Partners</a></li>
                <li class="breadcrumb-item active">Edit Our Partners</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_partners/fungsi_edit'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryPartnersDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Nama Partners</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $queryPartnersDetail->nama ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="inputCity" name="gambar">
                                <img class="mt-2" src="<?= base_url('assets/gambar/our_partners/') ?><?= $queryPartnersDetail->gambar; ?>" width="100">
                                <p><?= $queryPartnersDetail->gambar; ?></p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Partners</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>