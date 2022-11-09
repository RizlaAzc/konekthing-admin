<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Edit Kontak</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">User</li>
        <li class="breadcrumb-item"><a href="<?= base_url('kontak') ?>">Kontak</a></li>
        <li class="breadcrumb-item active">Edit Kontak</li>
      </ol>
      <div>
        <hr>
        <form action="<?= base_url('kontak/fungsi_edit') ?>" method="post">
          <table border="1">
            <br>
            <tr>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputAddress2" class="form-label">ID</label>
                  <input type="text" class="form-control" id="inputAddress2" name="id" value="<?php echo $queryPrdkDetail->id ?>" readonly>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" id="inputPassword4" placeholder="+62" name="telepon" value="<?php echo $queryPrdkDetail->telepon ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputAddress" placeholder="@gmail.com" name="email" value="<?php echo $queryPrdkDetail->email ?>" required>
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Lokasi</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="lokasi" value="<?php echo $queryPrdkDetail->lokasi ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>" required>
                </div>
                <br>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Edit Kontak</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </tr>
          </table>
          <?= form_close(); ?>
      </div>
    </div>
  </main>