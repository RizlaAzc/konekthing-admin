<div id="layoutSidenav_content">
     <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item active">Detail Our Team</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('our_team') ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6" style="float: right; padding-left: 5px;">
                                    <div class="col-md-10">
                                        <label for="inputCity" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryBlgDetail->deskripsi ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputCity" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="inputCity" name="telpon" value="<?php echo $queryBlgDetail->telpon ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputCity" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="inputCity" name="email" value="<?php echo $queryBlgDetail->email ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputCity" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="inputCity" name="alamat" value="<?php echo $queryBlgDetail->alamat ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputCity" class="form-label">Kebangsaan</label>
                                        <input type="text" class="form-control" id="inputCity" name="kebangsaan" value="<?php echo $queryBlgDetail->kebangsaan ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputCity" class="form-label">Gambar</label>
                                        <input type="text" class="form-control" id="inputCity" name="gambar" value="<?php echo $queryBlgDetail->gambar ?>" readonly>
                                        <br>
                                        <img class="mt-2" src="<?= base_url('assets/gambar/our_team/') ?><?= $queryBlgDetail->gambar; ?>" width="100">
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 5px;">
                                    <div class="col-md-10">
                                        <label for="inputEmail4" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryBlgDetail->id ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputAddress" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="inputAddress" name="nama" value="<?php echo $queryBlgDetail->nama ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputAddress" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="inputAddress" name="jenis_kelamin" value="<?php echo $queryBlgDetail->jenis_kelamin ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputAddress" class="form-label">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="inputAddress" name="tempat_tanggal_lahir" value="<?php echo $queryBlgDetail->tempat_tanggal_lahir ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputAddress" class="form-label">Agama</label>
                                        <input type="text" class="form-control" id="inputAddress" name="agama" value="<?php echo $queryBlgDetail->agama ?>" readonly>
                                    </div>
                                    <div class="col-md-10">
                                        <label for="inputAddress" class="form-label">Status</label>
                                        <input type="text" class="form-control" id="inputAddress" name="status" value="<?php echo $queryBlgDetail->status ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="col-10">
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