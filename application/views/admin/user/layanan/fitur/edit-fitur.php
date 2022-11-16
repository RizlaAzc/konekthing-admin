<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Fitur Layanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('layanan') ?>">Layanan</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('layanan/fitur/') . $id_layanan ?>">Fitur Layanan</a></li>
                <li class="breadcrumb-item active">Edit Fitur Layanan</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('layanan/fungsi_editfitur'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID Layanan</label>
                                <input type="text" class="form-control" id="inputAddress" name="id_layanan" value="<?= $queryFiturDetail->id_layanan ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryFiturDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Nama Fitur</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama_fitur" value="<?= $queryFiturDetail->nama_fitur ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Deskripsi Fitur</label>
                                <input type="text" class="form-control" id="inputAddress2" name="deskripsi_fitur" value="<?= $queryFiturDetail->deskripsi_fitur ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="inputCity" name="gambar_fitur">
                                <img class="mt-2" src="<?= base_url('assets/gambar/layanan/fitur/') ?><?= $queryFiturDetail->gambar_fitur; ?>" width="100">
                                <p><?= $queryFiturDetail->gambar_fitur; ?></p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Layanan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>