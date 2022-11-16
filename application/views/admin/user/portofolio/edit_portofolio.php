<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Edit Portofolio</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">User</li>
        <li class="breadcrumb-item"><a href="<?= base_url('portofolio') ?>">Portofolio</a></li>
        <li class="breadcrumb-item active">Edit Portofolio</li>
      </ol>
      <div>
        <hr>
        <?= form_open_multipart('portofolio/fungsi_edit'); ?>
        <table border="1">
          <tr>
            <form class="row g-3">
              <div class="col-md-12">
                <div class="col-md-6 text-center" style="float: right;">
                  <label for="inputAddress2" class="form-label">Kategori</label>
                  <div class="input-group justify-content-center mb-3">
                    <?php
                    foreach ($querymasterportofolioDetail as $querymasterportofolioDetail) {
                      $kategori = $this->db->query("SELECT * FROM kategori_portofolio WHERE id_portofolio = '$queryPrdkDetail->id' AND id_kategori = '$querymasterportofolioDetail->id'")->num_rows();
                      if ($kategori >= 1) {
                        $select = 'checked';
                      } else {
                        $select = '';
                      }
                    ?>
                      <div class="input-group-text" style="margin-right: 15px;">
                        <input class="form-check-input mt-0" type="checkbox" name="id_kategori[]" value="<?= $querymasterportofolioDetail->id ?>" <?= $select ?>> &nbsp; <?= $querymasterportofolioDetail->kategori_portofolio ?>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">ID</label>
                  <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPrdkDetail->id ?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $queryPrdkDetail->judul ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="inputCity" name="gambar">
                  <img class="mt-2" src="<?= base_url('assets/gambar/portofolio/') ?><?= $queryPrdkDetail->gambar; ?>" width="100">
                  <p><?= $queryPrdkDetail->gambar; ?></p>
                </div>
                <div class="col-md-6">
                  <button type="submit" class="btn btn-primary">Edit Portofolio</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </div>
            </form>
          </tr>
        </table>
        <?= form_close(); ?>
      </div>
    </div>
  </main>