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
                        <tr>
                            <form class="row g-3">
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryLynDetail->id ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $queryLynDetail->nama ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="judul" value="<?= $queryLynDetail->judul ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?= $queryLynDetail->deskripsi ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Sub Deskripsi</label>
                                    <input type="text" class="form-control" id="inputCity" name="sub_deskripsi" value="<?= $queryLynDetail->deskripsi ?>" readonly>
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