<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail SubFitur pendidkan & pengalaman</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">User</li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team') ?>">our_team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/fitur/') . $id_our_team ?>">Fitur our_team</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('our_team/subfitur/') . $querySubFiturDetail->id_fitur . '/' . $id_fitur?>">SubFitur our team</a></li>
                <li class="breadcrumb-item active">Detail SubFitur</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('our_team/subfitur/') . $querySubFiturDetail->id_fitur . '/' . $id_fitur?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">tk</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="tk" value="<?php echo $querySubFiturDetail->tk ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">sd</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="sd" value="<?php echo $querySubFiturDetail->sd ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">smp</label>
                                    <input type="text" class="form-control" id="inputAddress" name="smp" value="<?php echo $querySubFiturDetail->smp ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">sma</label>
                                    <input type="text" class="form-control" id="inputAddress" name="sma" value="<?php echo $querySubFiturDetail->sma ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">perguruan tinggi</label>
                                    <input type="text" class="form-control" id="inputAddress" name="perguruan_tinggi" value="<?php echo $querySubFiturDetail->perguruan_tinggi ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">pengalaman</label>
                                    <input type="text" class="form-control" id="inputAddress" name="pengalaman" value="<?php echo $querySubFiturDetail->pengalaman ?>" readonly>
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