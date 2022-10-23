<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="breadcrumb-item active">Tambah Blog</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('blog/fungsi_tambah'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="inputAddress" name="judul" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="inputAddress2" name="deskripsi" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Url</label>
                                <input type="text" class="form-control" id="inputCity" name="url" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="inputCity" name="gambar" required>
                            </div>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Tambah Blog</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>