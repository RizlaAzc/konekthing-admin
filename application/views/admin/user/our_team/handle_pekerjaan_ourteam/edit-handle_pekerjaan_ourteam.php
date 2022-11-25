<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Handle Pekerjaan Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/handle_pekerjaan_ourteam/' . $id_our_team) ?>">Handle Pekerjaan Our Team</a></li>
                <li class="breadcrumb-item active">Edit Handle Pekerjaan Our Team</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_team/fungsi_edit_handle_pekerjaan_ourteam'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-md-6" style="float: right; padding-left: 5px;">
                                <div class="col-md-10">
                                    <label for="inputEmail4" class="form-label">ID Our Team</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_our_team" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->id_our_team ?>" readonly>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Tahun Dari</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="tahun_dari" value="<?= $queryhandle_pekerjaan_ourteamDetail->tahun_dari ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Tahun Sampai</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="tahun_sampai" value="<?= $queryhandle_pekerjaan_ourteamDetail->tahun_sampai ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 5px;">
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryhandle_pekerjaan_ourteamDetail->id ?>" readonly>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress" class="form-label">Nama Project</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama_project" value="<?= $queryhandle_pekerjaan_ourteamDetail->nama_project ?>" required>
                                </div>
                                <div class="col-10">
                                    <label for="inputAddress2" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryhandle_pekerjaan_ourteamDetail->deskripsi ?>" required>
                                </div>
                                <br>
                                <div class="col-10">
                                    <button type="submit" class="btn btn-primary">Edit Handle Pekerjaan</button>
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