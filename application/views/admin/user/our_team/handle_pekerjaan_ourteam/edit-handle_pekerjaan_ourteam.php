

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit handle pekerjaan ourteam</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">handle pekerjaan ourteam</a></li>
                <li class="breadcrumb-item active">Edit handle pekerjaan ourteam</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_team/fungsi_edit_handle_pekerjaan_ourteam'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryhandle_pekerjaan_ourteamDetail->id ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID our team</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_our_team" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->id_our_team ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">nama project</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama_project" value="<?= $queryhandle_pekerjaan_ourteamDetail->nama_project ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">tahun dari</label>
                                <input type="text" class="form-control" id="inputAddress2" name="tahun_dari" value="<?= $queryhandle_pekerjaan_ourteamDetail->tahun_dari ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">tahun sampai</label>
                                <input type="text" class="form-control" id="inputAddress2" name="tahun_sampai" value="<?= $queryhandle_pekerjaan_ourteamDetail->tahun_sampai ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">deskripsi</label>
                                <input type="text" class="form-control" id="inputAddress2" name="deskripsi" value="<?= $queryhandle_pekerjaan_ourteamDetail->deskripsi ?>" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit handle pekerjaan ourteam</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>
