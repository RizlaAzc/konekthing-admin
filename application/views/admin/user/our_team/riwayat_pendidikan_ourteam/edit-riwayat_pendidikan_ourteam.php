

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit riwayat pendidikan ourteam</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">riwayat pendidikan ourteam</a></li>
                <li class="breadcrumb-item active">Edit riwayat pendidikan ourteam</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_team/fungsi_editriwayat_pendidikan_ourteam'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryriwayat_pendidikan_ourteamDetail->id ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID our team</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_our_team" value="<?php echo $queryriwayat_pendidikan_ourteamDetail->id_our_team ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">nama sekolah</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama_sekolah" value="<?= $queryriwayat_pendidikan_ourteamDetail->nama_sekolah ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">type sekolah</label>
                                <input type="text" class="form-control" id="inputAddress2" name="type_sekolah" value="<?= $queryriwayat_pendidikan_ourteamDetail->type_sekolah ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">deskripsi</label>
                                <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryriwayat_pendidikan_ourteamDetail->deskripsi ?>" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit riwayat pendidikan ourteam</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>
