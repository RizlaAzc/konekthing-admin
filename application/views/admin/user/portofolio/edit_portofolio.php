<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Edit Portofolio</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('portofolio') ?>">Portofolio</a></li>
        <li class="breadcrumb-item active">Edit Portofolio</li>
      </ol>
      <div>
        <hr>
        <form action="<?= base_url('portofolio/fungsi_edit') ?>" method="post">
          <table border="1">
            <br>
            <tr>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">ID</label>
                  <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPrdkDetail->id ?>" readonly>
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $queryPrdkDetail->judul ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>" required>
                </div>
                <br>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Edit Portofolio</button>
                </div>
              </form>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </main>