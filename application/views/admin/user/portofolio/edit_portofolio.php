<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit portofolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('portofolio') ?>">portofolio</a></li>
                <li class="breadcrumb-item active">Edit portofolio</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('portofolio/fungsi_edit') ?>" method="post">
                    <table border="1">


                        <br>
                        <tr>

          <form class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">id</label>
            <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPrdkDetail->id ?>">
          </div>
          <div class="col-6">
            <label for="inputAddress" class="form-label">judul</label>
            <input type="text" class="form-control" id="inputAddress" name="judul" value="<?php echo $queryPrdkDetail->judul ?>">
          </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">gambar</label>
            <input type="file" class="form-control" id="inputAddress2" name="gambar" value="<?php echo $queryPrdkDetail->gambar ?>">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">deskripsi</label>
            <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>">
          </div>
          <br>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <br>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">edit</button>
          </div>
        </form>
                            
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>