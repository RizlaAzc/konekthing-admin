<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah Kontak</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('kontak') ?>">Kontak</a></li>
        <li class="breadcrumb-item active">Tambah Kontak</li>
      </ol>
      <hr>
      <form action="<?= base_url('kontak/fungsi_tambah') ?>" method="post">
        <br>
        <tr>
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Nomor Telepon</label>
              <input type="email" class="form-control" id="inputPassword4" placeholder="+62" name="telepon" required>
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Email</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="@gmail.com" name="email" required>
            </div>
            <div class="col-6">
              <label for="inputAddress2" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="lokasi" required>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" id="inputCity" name="deskripsi" required>
            </div>
            <br>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Tambah Kontak</button>
            </div>
          </form>
      </form>
    </div>
  </main>