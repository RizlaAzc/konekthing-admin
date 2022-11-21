<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Pengalaman Kerja Our Team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">Our Team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/pengalaman_kerja_ourteam/' . $id_our_team) ?>">Pengalaman Kerja Our Team</a></li>
                <li class="breadcrumb-item active">Detail Pengalaman Kerja Our Team</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('our_team/pengalaman_kerja_ourteam/' . $id_our_team) ?>" method="post">
                    <table border="1">
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6" style="float: right; padding-left: 5px;">
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">ID Our Team</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="id_our_team" value="<?php echo $querypengalaman_kerja_ourteamDetail->id_our_team ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Tahun Dari</label>
                                        <input type="text" class="form-control" id="inputCity" name="tahun_dari" value="<?php echo $querypengalaman_kerja_ourteamDetail->tahun_dari ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Tahun Sampai</label>
                                        <input type="text" class="form-control" id="inputCity" name="tahun_sampai" value="<?php echo $querypengalaman_kerja_ourteamDetail->tahun_sampai ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 5px;">
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $querypengalaman_kerja_ourteamDetail->id ?>" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Nama Pengalaman</label>
                                        <input type="text" class="form-control" id="inputAddress" name="nama_pengalaman" value="<?php echo $querypengalaman_kerja_ourteamDetail->nama_pengalaman ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="inputCity" name="peskripsi" value="<?php echo $querypengalaman_kerja_ourteamDetail->peskripsi ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="col-12">
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