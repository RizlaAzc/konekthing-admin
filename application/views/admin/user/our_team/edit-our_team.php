
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item active">Edit Our Team</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_team/fungsi_edit'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-md-6" style="float: right; padding-left: 5px;">
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryBlgDetail->deskripsi ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="telpon" value="<?= $queryBlgDetail->telpon ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="email" value="<?= $queryBlgDetail->email ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="alamat" value="<?= $queryBlgDetail->alamat ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Kebangsaan</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="kebangsaan" value="<?= $queryBlgDetail->kebangsaan ?>" required>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputCity" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="inputCity" name="gambar">
                                    <br>
                                    <img class="mt-2" src="<?= base_url('assets/gambar/our_team/') ?><?= $queryBlgDetail->gambar; ?>" width="100">
                                    <p><?= $queryBlgDetail->gambar; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 5px;">
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryBlgDetail->id ?>" readonly>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $queryBlgDetail->nama ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="inputAddress" name="jenis_kelamin" value="<?= $queryBlgDetail->jenis_kelamin ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Tempat Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="inputAddress" name="tempat_tanggal_lahir" value="<?= $queryBlgDetail->tempat_tanggal_lahir ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="inputAddress" name="agama" value="<?= $queryBlgDetail->agama ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="inputAddress" name="status" value="<?= $queryBlgDetail->status ?>" required>
                                </div>
                                <br>
                                <div class="col-10">
                                    <button type="submit" class="btn btn-primary">Edit Team</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>