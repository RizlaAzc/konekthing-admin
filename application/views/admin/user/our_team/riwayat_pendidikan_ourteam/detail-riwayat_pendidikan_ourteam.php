<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Riwayat Pendidikan Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/riwayat_pendidikan_ourteam/' . $id_our_team) ?>">Riwayat Pendidikan Our Team</a></li>
                <li class="breadcrumb-item active">Detail Riwayat Pendidikan Our Team</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('our_team/riwayat_pendidikan_ourteam/' . $id_our_team) ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryriwayat_pendidikan_ourteamDetail->id ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID Our Team</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_our_team" value="<?php echo $queryriwayat_pendidikan_ourteamDetail->id_our_team ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Nama Sekolah</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama_sekolah" value="<?php echo $queryriwayat_pendidikan_ourteamDetail->nama_sekolah ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Type Sekolah</label>
                                    <input type="text" class="form-control" id="inputCity" name="type_sekolah" value="<?php echo $queryriwayat_pendidikan_ourteamDetail->type_sekolah ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryriwayat_pendidikan_ourteamDetail->deskripsi ?>" readonly>
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