<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail handle pekerjaan our team</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our team</a></li>
                <li class="breadcrumb-item active">Detail pengalaman kerja our team</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('our_team') ?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->id ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">ID our team</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="id_our_team" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->id_our_team ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">nama project</label>
                                    <input type="text" class="form-control" id="inputAddress" name="nama_project" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->nama_project ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">tahun dari</label>
                                    <input type="text" class="form-control" id="inputCity" name="tahun_dari" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->tahun_dari ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">tahun_sampai</label>
                                    <input type="text" class="form-control" id="inputCity" name="tahun_sampai" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->tahun_sampai ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">deskripsi</label>
                                    <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryhandle_pekerjaan_ourteamDetail->deskripsi ?>" readonly>
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