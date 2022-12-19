<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Message</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Message</li>
            </ol>
            <hr>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="row">
                <?php
                foreach ($queryAllmessage as $row) {
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?= base_url('message/fungsi_hapus/') . $row->id ?>"><button type="button" class="btn-close" data-bs-dismiss="card" aria-label="Close" style="float: right;"></button></a>
                                <h5 class="card-title text-center"><?= $row->subjek ?></h5>
                            </div>
                            <div class="card-header">
                                <h5 class="card-title" style="font-size: 16px;">Name&nbsp;: <?= $row->nama ?></h5>
                                <h5 class="card-title" style="font-size: 16px;">Email &nbsp;: <?= $row->email ?></h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted" style="float: left;"><?= date($row->date_created); ?></small>
                                <a href="<?= base_url('message/message_detail/') . $row->id ?>" class="btn btn-primary" style="float: right;">Lihat Pesan</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>