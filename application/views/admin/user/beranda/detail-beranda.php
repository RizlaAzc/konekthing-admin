<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Beranda</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Detail Beranda</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('beranda') ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6" style="float: right; padding-left: 5px;">
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Url</label>
                                        <input type="text" class="form-control" id="inputCity" name="url" value="<?php echo $queryBrndDetail->url ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Button</label>
                                        <input type="text" class="form-control" id="inputCity" name="button" value="<?php echo $queryBrndDetail->button ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Gambar</label>
                                        <input type="text" class="form-control" id="inputCity" name="gambar" value="<?php echo $queryBrndDetail->gambar ?>" readonly>
                                        <img class="mt-2" src="<?= base_url('assets/gambar/beranda/') ?><?= $queryBrndDetail->gambar; ?>" width="100">
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 5px;">
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryBrndDetail->id ?>" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $queryBrndDetail->judul ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryBrndDetail->deskripsi ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Tutup Detail</button>
                                    </div>
                                </div>
                            </form>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>