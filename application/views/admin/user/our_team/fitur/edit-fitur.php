<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Fitur</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our team</a></li>
                 <li class="breadcrumb-item"><a href="<?= base_url('our_team/fitur/') . $id_our_team ?>">Fitur our team</a></li> 
              <li class="breadcrumb-item active">Edit Fitur</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_team/fungsi_editfitur'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID our team</label>
                                <input type="text" class="form-control" id="inputAddress" name="id_our_team" value="<?= $queryFiturDetail->id_our_team ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ID</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $queryFiturDetail->id ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">nama</label>
                                <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $queryFiturDetail->nama ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">jenis kelamin</label>
                                <input type="text" class="form-control" id="inputAddress2" name="jenis_kelamin" value="<?= $queryFiturDetail->jenis_kelamin ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">tempat tanggal lahir</label>
                                <input type="text" class="form-control" id="inputCity" name="tempat_tanggal_lahir" value="<?= $queryFiturDetail->tempat_tanggal_lahir ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">kebangsaan</label>
                                <input type="text" class="form-control" id="inputCity" name="kebangsaan" value="<?= $queryFiturDetail->kebangsaan ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">status</label>
                                <input type="text" class="form-control" id="inputCity" name="status" value="<?= $queryFiturDetail->status ?>"required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">agama</label>
                                <input type="text" class="form-control" id="inputCity" name="agama" value="<?= $queryFiturDetail->agama ?>" required>
                            </div>
                             <div class="col-md-6">
                                <label for="inputCity" class="form-label">telepon</label>
                                <input type="text" class="form-control" id="inputCity" name="telepon" value="<?= $queryFiturDetail->telepon ?>" required>
                            </div>
                             <div class="col-md-6">
                                <label for="inputCity" class="form-label">email</label>
                                <input type="text" class="form-control" id="inputCity" name="email" value="<?= $queryFiturDetail->email ?>" required>
                            </div>
                             <div class="col-md-6">
                                <label for="inputCity" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="inputCity" name="alamat" value="<?= $queryFiturDetail->alamat ?>" required>
                            </div>
                            <br>                
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit Fitur</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>