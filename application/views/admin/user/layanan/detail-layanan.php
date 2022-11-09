<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Layanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('layanan') ?>">Layanan</a></li>
                <li class="breadcrumb-item active">Detail Layanan</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('layanan') ?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryLynDetail->id ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $queryLynDetail->judul ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryLynDetail->deskripsi ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Url</label>
                                    <input type="text" class="form-control" id="inputCity" name="url" value="<?php echo $queryLynDetail->url ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="text" class="form-control" id="inputCity" name="gambar" value="<?php echo $queryLynDetail->gambar ?>" readonly>
                                    <img class="mt-2" src="<?= base_url('assets/gambar/layanan/') ?><?= $queryLynDetail->gambar; ?>" width="100">
                                </div>
                                <br>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Tutup Detail</button>
                                </div>
                            </form>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>