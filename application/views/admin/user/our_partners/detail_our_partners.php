<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Our Partners</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_partners') ?>">Our Partners</a></li>
                <li class="breadcrumb-item active">Detail Our Partners</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('our_partners') ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPartnersDetail->id ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Nama Partners</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama" value="<?php echo $queryPartnersDetail->nama ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="text" class="form-control" id="inputCity" name="gambar" value="<?php echo $queryPartnersDetail->gambar ?>" readonly>
                                    <img class="mt-2" src="<?= base_url('assets/gambar/our_partners/') ?><?= $queryPartnersDetail->gambar; ?>" width="100">
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