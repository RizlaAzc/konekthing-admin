<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah Portofolio</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('portofolio') ?>">Portofolio</a></li>
        <li class="breadcrumb-item active">Tambah Portofolio</li>
      </ol>
      <div>
        <hr>
        <?= form_open_multipart('portofolio/fungsi_tambah'); ?>
        <table border="1">
          <br>
          <tr>
            <form class="row g-3">
              <div class="col-6">
                <label for="inputAddress" class="form-label">Judul</label>
                <input type="text" class="form-control" id="inputAddress" name="judul" required>
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="inputCity" name="deskripsi" required>
              </div>
              <div class="col-6">
                <label for="inputAddress2" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="inputAddress2" name="gambar" required>
              </div>
              <br>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Tambah Portofolio</button>
              </div>
            </form>
          </tr>
        </table>
        <?= form_close(); ?>
        </form>
      </div>
    </div>
  </main>