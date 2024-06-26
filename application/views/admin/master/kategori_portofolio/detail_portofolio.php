<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Kategori Portofolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Master</li>
                <li class="breadcrumb-item"><a href="<?= base_url('kategori_portofolio') ?>">Kategori Portofolio</a></li>
                <li class="breadcrumb-item active">Detail Kategori Portofolio</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('kategori_portofolio') ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPrdkDetail->id ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" id="inputAddress" name="kategori_portofolio" value="<?php echo $queryPrdkDetail->kategori_portofolio ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Deskripsi Kategori</label>
                                    <input type="text" class="form-control" id="inputAddress" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>" readonly>
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