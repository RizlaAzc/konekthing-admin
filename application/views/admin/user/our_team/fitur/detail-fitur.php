<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Fitur</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our team</a></li>
             <li class="breadcrumb-item"><a href="<?= base_url('our_team/fitur/') . $id_our_team  ?>">Fitur our team</a></li>
                <li class="breadcrumb-item active">Detail Fitur</li>
            </ol>
            <div>
                <hr>
                 <form action="<?= base_url('our_team/fitur/') . $id_our_team  ?>" method="post">
                   <table border="1">
                        <br>
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">nama</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="nama" value="<?php echo $queryFiturDetail->nama ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">tempat tangal lahir</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="tempat_tanggal_lahir" value="<?php echo $queryFiturDetail->tempat_tanggal_lahir ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">kebangsaan</label>
                                    <input type="text" class="form-control" id="inputAddress" name="kebangsaan" value="<?php echo $queryFiturDetail->kebangsaan ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">telepon</label>
                                    <input type="text" class="form-control" id="inputCity" name="status" value="<?php echo $queryFiturDetail->status ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">agama</label>
                                    <input type="text" class="form-control" id="inputCity" name="agama" value="<?php echo $queryFiturDetail->agama ?>" readonly>
                                </div>
                                 <div class="col-md-6">
                                    <label for="inputCity" class="form-label">alamat</label>
                                    <input type="text" class="form-control" id="inputCity" name="alamat" value="<?php echo $queryFiturDetail->alamat ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">telepon</label>
                                    <input type="text" class="form-control" id="inputCity" name="telepon" value="<?php echo $queryFiturDetail->telepon ?>" readonly>
                                </div>
                                 <div class="col-md-6">
                                    <label for="inputCity" class="form-label">email</label>
                                    <input type="text" class="form-control" id="inputCity" name="email" value="<?php echo $queryFiturDetail->email ?>" readonly>
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
    </main>s