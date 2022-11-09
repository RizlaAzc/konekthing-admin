<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail SubFitur</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk/fitur/') . $id_produk ?>">Fitur Produk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('produk/subfitur/') . $id_produk . '/' . $id_fitur ?>">SubFitur Produk</a></li>
                <li class="breadcrumb-item active">Detail SubFitur</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('produk/subfitur/') . '/' . $id_produk . '/' . $id_fitur ?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID Fitur</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_fitur" value="<?php echo $querySubFiturDetail->id_fitur ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $querySubFiturDetail->id ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Nama SubFitur</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama_subfitur" value="<?php echo $querySubFiturDetail->nama_subfitur ?>" readonly>
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