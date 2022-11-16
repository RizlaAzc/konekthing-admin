<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Fitur Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog/fitur/') . $id_blog ?>">Fitur Blog</a></li>
                <li class="breadcrumb-item active">Edit Fitur Blog</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('blog/fungsi_editfitur'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID Blog</label>
                                <input type="text" class="form-control" id="inputAddress" name="id_blog" value="<?= $queryFiturDetail->id_blog ?>" readonly>
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
                                <img class="mt-2" src="<?= base_url('assets/gambar/blog/fitur/') ?><?= $queryFiturDetail->gambar_fitur; ?>" width="100">
                                <p><?= $queryFiturDetail->gambar_fitur; ?></p>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Blog</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>