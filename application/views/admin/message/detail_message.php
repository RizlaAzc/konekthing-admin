<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Message</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('message') ?>">Message</a></li>
                <li class="breadcrumb-item active">Detail Message</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('message') ?>">
                    <table border="1">
                        <tr>
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="inputCity" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="inputAddress" name="nama" value="<?= $queryAllmessageDetail->nama ?>" readonly>
                                        </div>
                                        <div class="col-md-6 form-group mt-md-0">
                                            <label for="inputCity" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputAddress2" name="email" value="<?= $queryAllmessageDetail->email ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCity" class="form-label">Subjek</label>
                                        <input type="text" class="form-control" id="inputCity" name="subjek" value="<?= $queryAllmessageDetail->subjek ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCity" class="form-label">Pesan</label>
                                        <textarea class="form-control" name="pesan" rows="5" readonly><?= $queryAllmessageDetail->pesan ?></textarea>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Tutup Detail</button>
                                    </div>
                                </div><!-- End Contact Form -->
                            </div>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>