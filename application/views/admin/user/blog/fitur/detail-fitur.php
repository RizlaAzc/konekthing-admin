<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Fitur Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog/fitur/') . $id_blog ?>">Fitur Blog</a></li>
                <li class="breadcrumb-item active">Detail Fitur Blog</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('blog/fitur/') . '/' . $id_blog ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID Blog</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_blog" value="<?php echo $queryFiturDetail->id_blog ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryFiturDetail->id ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Nama Fitur</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama_fitur" value="<?php echo $queryFiturDetail->nama_fitur ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Deskripsi Fitur</label>
                                    <input type="text" class="form-control" id="inputCity" name="deskripsi_fitur" value="<?php echo $queryFiturDetail->deskripsi_fitur ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="text" class="form-control" id="inputCity" name="gambar_fitur" value="<?php echo $queryFiturDetail->gambar_fitur ?>" readonly>
                                    <img class="mt-2" src="<?= base_url('assets/gambar/blog/fitur/') ?><?= $queryFiturDetail->gambar_fitur; ?>" width="100">
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