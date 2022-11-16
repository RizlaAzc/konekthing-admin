<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit SubFitur pendidkan & pengalaman</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/fitur/') . $id_our_team ?>">Fitur our team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/subfitur/') . $querySubFiturDetail->id_fitur . '/' . $id_fitur ?>">SubFitur our_team</a></li>
                <li class="breadcrumb-item active">Edit SubFitur</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('our_team/fungsi_editsubfitur'); ?>
                <table border="1">
                    <tr>
                        <form class="row g-3">
                             <div class="col-6">
                                <label for="inputAddress" class="form-label">id</label>
                                <input type="text" class="form-control" id="inputAddress" name="id" value="<?= $querySubFiturDetail->id ?>" readonly>
                            </div>
                             <div class="col-6">
                                <label for="inputAddress" class="form-label">id_fitur</label>
                                <input type="text" class="form-control" id="inputAddress" name="id_fitur" value="<?= $querySubFiturDetail->id_fitur ?>" readonly>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">tk</label>
                                <input type="text" class="form-control" id="inputAddress" name="tk" value="<?= $querySubFiturDetail->tk ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">sd</label>
                                <input type="text" class="form-control" id="inputAddress" name="sd" value="<?= $querySubFiturDetail->sd ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">smp</label>
                                <input type="text" class="form-control" id="inputAddress" name="smp" value="<?= $querySubFiturDetail->smp ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">sma</label>
                                <input type="text" class="form-control" id="inputAddress" name="sma" value="<?= $querySubFiturDetail->sma ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">perguruan tinggi</label>
                                <input type="text" class="form-control" id="inputAddress" name="perguruan_tinggi" value="<?= $querySubFiturDetail->perguruan_tinggi ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">pengalaman</label>
                                <input type="text" class="form-control" id="inputAddress" name="pengalaman" value="<?= $querySubFiturDetail->pengalaman ?>" required>
                            </div>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Edit SubFitur</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>
